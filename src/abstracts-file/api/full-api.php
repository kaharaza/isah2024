<?php
require_once './../../../config/connectdb.php';
header('Content-Type: application/json');

require_once './../../../plugin/PHPMailer/PHPMailer.php';
require_once './../../../plugin/PHPMailer/SMTP.php';
require_once './../../../plugin/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$allowedEx = array('docx', 'rar');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json_data = file_get_contents("php://input");
    $postData  = json_decode($json_data, true);
    $fullpaper = $postData['fullpaper'];

    if (isset($fullpaper)) {
        $requestPaper = $fullpaper['results'];
        $requestUploadfile = $fullpaper['uploadFiles'];

        $ResearchTitle = $requestPaper['research'];

        $checkResearchTitle = "SELECT research_title FROM tbl_research WHERE research_title = ?";
        $paramsResearchTitle = array($ResearchTitle);
        $queryResearchTitle = DB::query($checkResearchTitle, $paramsResearchTitle);

        if (!empty($queryResearchTitle)) {
            Response::error('DuplicateResearchTitle', 400);
        } else {

            $uploadfileTitle = Helper::clean($requestUploadfile['title']);
            $uploadfileMain = Helper::clean($requestUploadfile['main']);
            $uploadfileTable = Helper::clean($requestUploadfile['table']);

            if (
                preg_match('/^data:application\/vnd\.openxmlformats-officedocument\.wordprocessingml\.document;base64,(.*)/', $uploadfileTitle, $matchesTitle)
                && preg_match('/^data:application\/vnd\.openxmlformats-officedocument\.wordprocessingml\.document;base64,(.*)/', $uploadfileMain, $matchesMain)
                && preg_match('/^data:application\/x-compressed;base64,(.*)/', $uploadfileTable, $matchesTable)
            ) {

                $fileDataTitle = $matchesTitle[1];
                $fileDataMain = $matchesMain[1];
                $fileDataTable = $matchesTable[1];


                $researchTitle = Helper::clean($requestPaper['research']);
                $researchTitle = str_replace(' ', '_', $researchTitle);

                $folder = $researchTitle;
                $newFolder = './../uploadFullpaper/' . $folder;

                if (!is_dir($folder)) {
                    mkdir($newFolder, 0777, true);
                }

                $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
                $host = $_SERVER['HTTP_HOST'];
                $path = 'isahcmu/';
                $url = $protocol . '://' . $host . '/' . $path;

                $newfileTitle = 'Title_page' . '.docx';
                $newfileMain = 'Main_manuscript' . '.docx';
                $newfileTable = 'Figure+table' . '.rar';

                $newPathtitle = $newFolder . '/' . $newfileTitle;
                $newPathmain = $newFolder . '/' . $newfileMain;
                $newPathtable = $newFolder . '/' . $newfileTable;

                $linkFile = array(
                    'title' => $url . 'src/abstracts-file/uploadFullpaper/' . $folder . '/' . $newfileTitle,
                    'main' => $url . 'src/abstracts-file/uploadFullpaper/' . $folder . '/' . $newfileMain,
                    'table' => $url . 'src/abstracts-file/uploadFullpaper/' . $folder . '/' . $newfileTable,
                );


                $fileBinarytitle = base64_decode($fileDataTitle);
                $fileBinarymain = base64_decode($fileDataMain);
                $fileBinarytable = base64_decode($fileDataTable);

                $fileExTitle = strtolower(pathinfo($newfileTitle, PATHINFO_EXTENSION));
                $fileExMain = strtolower(pathinfo($newfileMain, PATHINFO_EXTENSION));
                $fileExTable = strtolower(pathinfo($newfileTable, PATHINFO_EXTENSION));

                if (
                    in_array($fileExTitle, $allowedEx)
                    && in_array($fileExMain, $allowedEx)
                    && in_array($fileExTable, $allowedEx)
                ) {

                    if (
                        file_put_contents($newPathtitle, $fileBinarytitle) !== false
                        && file_put_contents($newPathmain, $fileBinarymain) !== false
                        && file_put_contents($newPathtable, $fileBinarytable) !== false
                    ) {
                        if (isset($requestPaper['scholarship'])) {
                            $insertFullPaper = "INSERT INTO `tbl_research`(`firstname`, `lastname`, `email`, `category`, `scholarship`, `country`, `research_title`, `topic`, `link_title`, `link_main`, `link_table`, `prefer`, `createdAt`, `updatadAt`) 
                        VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? )";

                            $insertFullPaperParams = array(
                                $requestPaper['firstname'],
                                $requestPaper['lastname'],
                                $requestPaper['email'],
                                $requestPaper['category'],
                                $requestPaper['scholarship'],
                                $requestPaper['country'],
                                $requestPaper['research'],
                                $requestPaper['topic'],
                                $linkFile['title'],
                                $linkFile['main'],
                                $linkFile['table'],
                                $requestPaper['prefer'],
                                date('Y-m-d H:i:s'),
                                date('Y-m-d H:i:s'),
                            );
                            $insertFullPaperQuery = DB::query($insertFullPaper, $insertFullPaperParams);

                            if (!empty($insertFullPaperQuery)) {
                                $response = $requestPaper;
                                sendemail($response);
                            } else {
                                return Response::error('Error Database', 500);
                            }
                        } else {
                            $insertFullPaper = "INSERT INTO `tbl_research`(`firstname`, `lastname`, `email`, `category`, `country`, `research_title`, `topic`, `link_title`, `link_main`, `link_table`, `prefer`, `createdAt`, `updatadAt`) 
                        VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? )";
                            $insertFullPaperParams = array(
                                $requestPaper['firstname'],
                                $requestPaper['lastname'],
                                $requestPaper['email'],
                                $requestPaper['category'],
                                $requestPaper['country'],
                                $requestPaper['research'],
                                $requestPaper['topic'],
                                $linkFile['title'],
                                $linkFile['main'],
                                $linkFile['table'],
                                $requestPaper['prefer'],
                                date('Y-m-d H:i:s'),
                                date('Y-m-d H:i:s'),
                            );
                            $insertFullPaperQuery = DB::query($insertFullPaper, $insertFullPaperParams);

                            if (!empty($insertFullPaperQuery)) {
                                $response = $requestPaper;
                                sendemail($response);
                            } else {
                                return Response::error('Error Database', 500);
                            }
                        }
                    } else {
                        Response::error('Error path', 404);
                    }
                } else {
                    Response::error('Error upload', 404);
                }
            } else {
                Response::error('Not files upload', 404);
            }
        }
    } else {
        Response::error('Not found', 404);
    }
} else {
    Response::error('Metod error', 500);
}


function sendemail($send) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "isah2024cmu@gmail.com";
        $mail->Password = "gksyxfgpxxyfpsuh";
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        $mail->isHTML(true);

        $response = array(
            'fullname' => $send['firstname'] . ' ' . $send['lastname'],
            'email' => $send['email'],
            'websiteURL' => 'https://isah2024.vet.cmu.ac.th/isahcmu/'
        );

        $mail->CharSet = 'UTF-8';
        $mail->setFrom($response['email'], 'Successful Full Paper Submission to the ISAH & SEAOHUN International Conference 2024');
        $mail->addAddress($response['email']);
        $mail->Subject = 'Successful Full Paper Submission to the ISAH & SEAOHUN International Conference 2024';

        $mail->Body = '
        Dear ' . $response['fullname'] . ',<br><br>' .

        'Thank you for submitting your full paper to the ISAH & SEAOHUN International Conference 2024, scheduled to be held at Shangri-La Chiang Mai, Chiang Mai, Thailand, from September 16 to 20, 2024.<br><br>' .

        'We are pleased to inform you that your full paper submission has been successfully completed. Notification of acceptance will be sent by May 2024.<br><br>' .
       
        'For further information, please visit our website at <a href="' . $response['websiteURL'] . '">' . $response['websiteURL'] . '</a><br><br>' .
         
        'Thank you for your contribution, and we look forward to welcoming you to the ISAH & SEAOHUN International Conference 2024!<br><br>'.

        'Sincerely Yours,<br><br>'.

        'ISAH 2024 Organizing Team<br>'.

        '<img src="https://isah2024.vet.cmu.ac.th/isahcmu/image/logo_2.png" style="width: 200px" alt="Conference Logo"><br>' .

        'ISAH & SEAOHUN International Conference 2024<br>' .
        'Veterinary Public Health Centre for Asia Pacific (VPHCAP)<br>' .
        'Faculty of Veterinary Medicine, Chiang Mai University<br>' .
        '155 Mae Hia, Muang, Chiang Mai 50100, Thailand<br>' .
        'Tel: (+66) 53-848073, 053-948026<br>' .
        'Fax: (+66) 53-948065<br>' .
        'E-mail isah2024cmu@gmail.com'
        ;
        $mail->send();
        Response::success(1, 'Success');
    } catch (Exception $e) {
        Response::error("Failed to send email: " . $e->getMessage(), 500);
    }
}
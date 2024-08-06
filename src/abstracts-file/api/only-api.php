<?php
require_once './../../../config/connectdb.php';
header('Content-Type: application/json');


require_once './../../../plugin/PHPMailer/PHPMailer.php';
require_once './../../../plugin/PHPMailer/SMTP.php';
require_once './../../../plugin/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



// ประกาศตัวแปร $allowedEx ที่เป็นอาร์เรย์ของนามสกุลไฟล์ที่อนุญาต
$allowedEx = array('docx');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json_data = file_get_contents("php://input");
    $request_data = json_decode($json_data, true);
    if (isset($request_data['abstract'])) {
        $requestClient = $request_data['abstract'];

        $ResearchTitle = $requestClient['inputObject']['research'];

   


        $checkResearchTitle = "SELECT research_title FROM tbl_research_only WHERE research_title = ?";
        $paramsResearchTitle = array($ResearchTitle);
        $queryResearchTitle = DB::query($checkResearchTitle, $paramsResearchTitle);

        if (!empty($queryResearchTitle)) {
            // ชื่อเรื่องมีอยู่ในฐานข้อมูลแล้ว
            Response::error('DuplicateResearchTitle', 400);
        } else {
            // ชื่อเรื่องม่มีอยู่, ดำเนินการต่อด้วยการตอบกลับด้วย 'Success'
            $uploadFile = Helper::clean($requestClient['uploadFileAbstract']);

            // ใช้ preg_match ในการดึงข้อมูล
            if (preg_match('/^data:application\/vnd\.openxmlformats-officedocument\.wordprocessingml\.document;base64,(.*)/', $uploadFile, $matches)) {
                $fileData = $matches[1];  // ใช้ $matches[1] เพื่อดึงข้อมูลที่ต้องการ

                $researchTitle = Helper::clean($requestClient['inputObject']['research']);
                $researchTitle = str_replace(' ', '_', $researchTitle);

                $folder = 'uploadFile';
                $newFolder = './../' . $folder;

                $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
                $host = $_SERVER['HTTP_HOST'];
                $path = 'isahcmu/';
                $url = $protocol . '://' . $host . '/' . $path;


                $newfileupload = $researchTitle . '.docx';
                $linkFile = $url . 'src/abstracts-file/' . $folder . '/' . $newfileupload;
                $newPath = $newFolder . '/' . $newfileupload;

                if (!is_dir($newFolder)) {
                    mkdir($newFolder, 0777, true);
                }

                $fileBinary = base64_decode($fileData);

                // ใช้ pathinfo เพื่อดึงนามสกุลของไฟล์
                $fileEx = strtolower(pathinfo($newfileupload, PATHINFO_EXTENSION));

                if (in_array($fileEx, $allowedEx)) {
                    if (file_put_contents($newPath, $fileBinary) !== false) {

                        if (isset($requestClient['inputObject']['scholarship'])) {
                            $insertAbstract = "INSERT INTO `tbl_research_only`(`firstname`, `lastname`, `email`, `category`, `scholarship`, `country`, `research_title`, `topic`, `link_research`, `prefer`, `createdAt`, `updatedAt`) 
                                           VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?)";
                            $paramsAbstract = array(
                                Helper::clean($requestClient['inputObject']['firstname']),
                                Helper::clean($requestClient['inputObject']['lastname']),
                                Helper::clean($requestClient['inputObject']['email']),
                                Helper::clean($requestClient['inputObject']['category']),
                                Helper::clean($requestClient['inputObject']['scholarship']),
                                Helper::clean($requestClient['inputObject']['country']),
                                Helper::clean($requestClient['inputObject']['research']),
                                Helper::clean($requestClient['inputObject']['topic']),
                                $linkFile,
                                Helper::clean($requestClient['inputObject']['prefer']),
                                date('Y-m-d H:i:s'),
                                date('Y-m-d H:i:s'),
                            );

                            $queryAbstract = DB::query($insertAbstract, $paramsAbstract);

                            if (!empty($queryAbstract)) {
                                // return Response::success($queryAbstract, 'Success');
                                $response = $requestClient['inputObject'];
                                sendemail($response);
                            } else {
                                return Response::error('Error Database', 500);
                            }
                        } else {
                            $insertAbstract = "INSERT INTO `tbl_research_only`(`firstname`, `lastname`, `email`, `category`, `country`, `research_title`, `topic`, `link_research`, `prefer`, `createdAt`, `updatedAt`) 
                                           VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?)";
                            $paramsAbstract = array(
                                Helper::clean($requestClient['inputObject']['firstname']),
                                Helper::clean($requestClient['inputObject']['lastname']),
                                Helper::clean($requestClient['inputObject']['email']),
                                Helper::clean($requestClient['inputObject']['category']),
                                Helper::clean($requestClient['inputObject']['country']),
                                Helper::clean($requestClient['inputObject']['research']),
                                Helper::clean($requestClient['inputObject']['topic']),
                                $linkFile,
                                Helper::clean($requestClient['inputObject']['prefer']),
                                date('Y-m-d H:i:s'),
                                date('Y-m-d H:i:s'),
                            );

                            $queryAbstract = DB::query($insertAbstract, $paramsAbstract);

                            if (!empty($queryAbstract)) {
                                $response = $requestClient['inputObject'];
                                sendemail($response);
                            } else {
                                Response::error('Error Database', 500);
                            }
                        }
                    } else {
                        Response::error('Error saving file', 500);
                    }
                } else {
                    Response::error('Invalid file extension', 400);
                }
            } else {
                Response::error('Invalid file data format', 400);
            }
        }
    } else {
        Response::error('Not found', 404);
    }
} else {
    Response::error('Method error', 500);
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
        $mail->setFrom($response['email'], 'Successful Abstract Submission to the ISAH & SEAOHUN International Conference 2024');
        $mail->addAddress($response['email']);
        $mail->Subject = 'Successful Abstract Submission to the ISAH & SEAOHUN International Conference 2024';

        $mail->Body = '
        Dear ' . $response['fullname'] . ',<br><br>' .

        'Thank you for registering for the <b>ISAH & SEAOHUN International Conference 2024,</b> scheduled to be held at Shangri-La Chiang Mai, from September 16 to 20, 2024 in Chiang Mai, Thailand.<br><br>' .

        'We are pleased to inform you that your abstract submission has been successfully completed. Notification of acceptance will be sent by May 2024.<br><br>' .
       
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

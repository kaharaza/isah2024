<?php

require_once './../../../config/connectdb.php';
require_once '../../vendor/autoload.php';
header('Content-Type: application/json');


use Firebase\JWT\JWT;
use Firebase\JWT\Key;

require_once './../../../plugin/PHPMailer/PHPMailer.php';
require_once './../../../plugin/PHPMailer/SMTP.php';
require_once './../../../plugin/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['reQuest'])) {
        $reQuestClient = $_POST['reQuest'];

        $payload = array(
            'userId' => Helper::clean($reQuestClient['ID']),
            'password' => Helper::clean($reQuestClient['password']),
            'prefix' => Helper::clean($reQuestClient['prefix']),
            'firstname' => Helper::clean($reQuestClient['firstname']),
            'lastname' => Helper::clean($reQuestClient['lastname']),
            'organization' => Helper::clean($reQuestClient['organization']),
            'email' => Helper::clean($reQuestClient['email']),
            'selectStatus' => Helper::clean($reQuestClient['selectStatus']),
            'fee' => Helper::clean($reQuestClient['fee']),
            'country' => Helper::clean($reQuestClient['country']),
            'attend' => Helper::clean($reQuestClient['attend']),
            'feejoins' => Helper::clean($reQuestClient['feejoins']),
            'selectfeejoin' => Helper::clean($reQuestClient['selectfeejoin']),
            'selectworkshop' => Helper::clean($reQuestClient['selectworkshop']) !== '' ? Helper::clean($reQuestClient['selectworkshop']) : 'NO WS/FT',
            'selecttirp' => Helper::clean($reQuestClient['selecttirp']) !== '' ? Helper::clean($reQuestClient['selecttirp']) : 'NO WS/FT',
            'total' => Helper::clean($reQuestClient['total']),
            'food' => Helper::clean($reQuestClient['food']),
            'checkDate' => Helper::clean($reQuestClient['checkDate']),
            'token' => genToken(32),
            'salt' => genToken(10),
            'createdAt' => date('Y-m-d H:i:s'),
            'updatedAt' => date('Y-m-d H:i:s')
        );

        $passwordHash = hash('sha256', $payload['password']);
        $token =  $payload['token'] . $payload['salt'];
        $totalInt = intval(Helper::clean($reQuestClient['total']));
        $tokenpayment = 'No';

        $selectCheckData = "SELECT userId FROM tbl_register_users WHERE userId = :userId";
        $selectArray = array(':userId' => $payload['userId']);
        $selectQuery = DB::query($selectCheckData, $selectArray);

        if (!empty($selectQuery)) {
            Response::error('Duplicate', 404);
        } else {
            $insertinfo = "INSERT INTO `tbl_register_users`(`userId`, `prefix`, `firstname`, `lastname`, `email`, `organization`, `country`, `selectStatus`, `attend`, `fee`, `feejoins`, `selectfeejoin`, `selecttirp`, `selectworkshop`, `total`, `food`, `checkDate`, `pwd`, `salt`, `token`, `tokerpayment`, `createdAt`, `updatedAt`) 
        VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? )";

            $insertinfoParmas = array(
                $payload['userId'],
                $payload['prefix'],
                $payload['firstname'],
                $payload['lastname'],
                $payload['email'],
                $payload['organization'],
                $payload['country'],
                $payload['selectStatus'],
                $payload['attend'],
                $payload['fee'],
                $payload['feejoins'],
                $payload['selectfeejoin'],
                $payload['selecttirp'],
                $payload['selectworkshop'],
                $totalInt,
                $payload['food'],
                $payload['checkDate'],
                $passwordHash,
                $payload['salt'],
                $token,
                $tokenpayment,
                $payload['createdAt'],
                $payload['updatedAt']
            );

            $insertinfoResult = DB::query($insertinfo, $insertinfoParmas);

            if ($insertinfoResult) {
                $config = include_once('../../../config/config_payment.php');

                $sck = $config['secretkey'];
                $merchantID = $config['merchantID'];
                $api_endpoint = $config['api_endpoint'];
                $url_redirect = $config['url_redirect'];
                $url_redirectBackend = $config['url_redirectBackend'];


                $payloadPayment = array(
                    "merchantID" => $merchantID,
                    "invoiceNo" => $payload['userId'],
                    "description" => "Registration fee for ISAH & SEAOHUN International Conference 2024",
                    "amount" => intval($totalInt),
                    "currencyCode" => "USD",
                    // "paymentChannel" => ["CC"],
                    "paymentExpiry" => date('2024-08-31 23:59:59'),
                    "frontendReturnUrl" => $url_redirect,
                );

                if ($payload['checkDate'] > $payloadPayment['paymentExpiry']) {
                    Response::error('TIME OUT', 404);
                } else {

                    $jwt_token = JWT::encode($payloadPayment, $sck, 'HS256');
                    $data = '{"payload":"' . $jwt_token . '"}';

                    $http = new HTTP();
                    $response = $http->post($api_endpoint, $data);

                    if ($response === false) {
                        echo 'HTTP request failed.';
                    } else {

                        $decoded = json_decode($response, true);
                        $payloadResponse = $decoded['payload'];
                        $decodedPayload = JWT::decode($payloadResponse, new Key($sck, 'HS256'));

                        $decoded_array = (array) $decodedPayload;


                        if ($decoded_array['respCode'] === '0000' && $decoded_array['respDesc'] === 'Success' && $decoded_array['paymentToken'] !== null) {

                            $updataTokenPayment = "UPDATE tbl_register_users SET tokerpayment = ? , paymentExpiry = ?  WHERE userId = ?";
                            $updataParmas = array($decoded_array['webPaymentUrl'], $payloadPayment['paymentExpiry'], $payload['userId']);
                            $updataQuery = DB::query($updataTokenPayment, $updataParmas);

                            if (!empty($updataQuery)) {
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
                                        'userId' => $payload['userId'],
                                        'fullname' => $payload['prefix'] . ' ' . $payload['firstname'] . ' ' . $payload['lastname'],
                                        'pwd' => $payload['password'],
                                        'email' => $payload['email'],
                                        'paymentURL' => $decoded_array['webPaymentUrl'],
                                        'websiteURL' => 'https://isah2024.vet.cmu.ac.th/isahcmu/ '
                                    );

                                    $mail->CharSet = 'UTF-8';
                                    $mail->setFrom($response['email'], 'Successful Registration for ISAH & SEAOHUN International Conference 2024');
                                    $mail->addAddress($response['email']);
                                    $mail->Subject = 'Successful Registration for ISAH & SEAOHUN International Conference 2024';

                                    $mail->Body = '
                                    Dear ' . $response['fullname'] . ',<br><br>' .
                                    'User ID: ' . $response['userId'] . '<br><br>' .

                                    'Thank you for registering for the <b>ISAH & SEAOHUN International Conference 2024,</b> scheduled to be held at Shangri-La Chiang Mai, from September 16 to 20, 2024 in Chiang Mai, Thailand.<br><br>' .

                                    'We are pleased to inform you that your registration has been successfully completed. For further information, please visit the conference website:<br>' .
                                    '<a href="' . $response['websiteURL'] . '">' . $response['websiteURL'] . '</a><br><br>' .

                                    'To complete your registration fee payment, please visit '. '<a href="' . $response['paymentURL'] . '">' . 'this link' . '</a> and log in using your credentials.<br><br>'.

                                    '• <b>Early Bird</b> Registration Date: 15 January – 15 June 2024<br>' .
                                    '• <b>Regular</b> Registration Date: 16 June – 1 September 2024<br><br>' .

                                    'If you have any questions, please do not hesitate to contact us.<br><br>' . 

                                    'We look forward to welcoming you to the ISAH & SEAOHUN International Conference 2024!<br><br>'.

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
                                    Response::success($response, 'Success');
                                } catch (Exception $e) {
                                    Response::error("Failed to send email: " . $e->getMessage(), 500);
                                }
                            } else {
                                Response::error('NotToken', 302);
                            }
                        } else {
                            echo "Error: " . $respDesc;
                        }
                    }
                }
            }
        }
    } else {
        Response::error('Not found', 404);
    }
} else {
    Response::error('METHOD FAIL', 500);
}


function genToken($length = 64)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function randomId($length = 32)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
        if (($i + 1) % 8 === 0 && $i !== $length - 1) {
            $randomString .= '-';
        }
    }

    return $randomString;
}

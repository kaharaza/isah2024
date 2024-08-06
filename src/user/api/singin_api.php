<?php
include_once './../../../config/connectdb.php';
require_once '../../vendor/autoload.php';
header('Content-Type: application/json');

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

require_once './../../../plugin/PHPMailer/PHPMailer.php';
require_once './../../../plugin/PHPMailer/SMTP.php';
require_once './../../../plugin/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (isset($_POST['payload'])) {
        $payload = $_POST['payload'];

        $payloadPasams = array(
            'userId' => Helper::clean($payload['userId']),
            'password' => $payload['passwordHash'],
        );

        $config = include_once('../../../config/config_payment.php');

        $sck = $config['secretkey'];
        $merchantID = $config['merchantID'];
        $api_inpoint = $config['api_inpoint'];

        $payloadPayment = array(
            "merchantID" => $merchantID,
            "invoiceNo" => $payloadPasams['userId'],
            "locale" => "en",
        );

        $jwt_token = JWT::encode($payloadPayment, $sck, 'HS256');
        $data = '{"payload":"' . $jwt_token . '"}';

        $http = new HTTP();
        $response = $http->post($api_inpoint, $data);

        if ($response === false) {
            return Response::error('NotfoundPaymentToken', 500);
        } else {
            $decoded = json_decode($response, true);
            $payloadResponse = $decoded['payload'];
            $decodedPayload = JWT::decode($payloadResponse, new Key($sck, 'HS256'));

            $decoded_array = (array) $decodedPayload;

           

            if (
                isset($decoded_array['respCode']) && $decoded_array['respCode'] === '0000' &&
                isset($decoded_array['respDesc']) && $decoded_array['respDesc'] === 'Success' &&
                isset($decoded_array['paymentID'])
            ) {

                $paymentStatus = 'success';
                $updatePaymentStatus = "UPDATE tbl_register_users SET statusPayment = ? WHERE userId = ?";
                $updatePaymentStatusParams = array($paymentStatus, $decoded_array['invoiceNo']);
                $updatePaymentQuery = DB::query($updatePaymentStatus, $updatePaymentStatusParams);

            } 

            $passwordHash = hash('sha256', $payloadPasams['password']);

            $selectUser = "SELECT  `prefix`, `firstname`, `lastname`, `email`, `organization`, `country`, `selectStatus`, `attend`, `fee`, `feejoins`, `selectfeejoin`, `selecttirp`, `selectworkshop`, `total`, `food`, `checkDate`, `tokerpayment`, `paymentExpiry`, `statusPayment`, `sendemail`, `createdAt`, `updatedAt` 
            FROM `tbl_register_users` WHERE userId = ? AND pwd = ?";
            $selectUserParams = array($payloadPasams['userId'], $passwordHash);

            $selectUserQuery = DB::query($selectUser, $selectUserParams);

            if ($selectUserQuery && count($selectUserQuery) === 1) {
                $user = $selectUserQuery[0];
                
                $emailSend = array(
                    'userId' => $payloadPasams['userId'],
                    'paymentID' => $decoded_array['paymentID'],
                    'transactionDateTime' => $decoded_array['transactionDateTime'],
                    'prefix' => $user['prefix'],
                    'attend' => $user['attend'],
                    'firstname' => $user['firstname'],
                    'lastname' => $user['lastname'],
                    'email' => $user['email'],
                    'organization' => $user['organization'],
                    'country' => $user['country'],
                    'attend' => $user['attend'],
                    'selectfeejoin' => $user['selectfeejoin'],
                    'selecttirp' => $user['selecttirp'],
                    'selectworkshop' => $user['selectworkshop'],
                    'tokerpayment' => $user['tokerpayment'],
                    'paymentExpiry' => $user['paymentExpiry'],
                    'statusPayment' => $user['statusPayment'],
                    'sendemail' => $user['sendemail'],
                    'food' => $user['food'],
                    'respCode' => $decoded_array['respCode'],
                    'respDesc' => $decoded_array['respDesc'],
                );
                if ($emailSend['statusPayment'] === 'success') {
                    sendEmail($emailSend);
                } else {
                    if (!$user['tokerpayment']) {
                        Response::error('Authenzition fail', 404);
                    } else {
                        $response_data = array(
                            'userId' => $payloadPasams['userId'],
                            'paymentID' => $decoded_array['paymentID'],
                            'transactionDateTime' => $decoded_array['transactionDateTime'],
                            'prefix' => $user['prefix'],
                            'attend' => $user['attend'],
                            'firstname' => $user['firstname'],
                            'lastname' => $user['lastname'],
                            'amount' => $user['total'],
                            'email' => $user['email'],
                            'organization' => $user['organization'],
                            'country' => $user['country'],
                            'attend' => $user['attend'],
                            'selectfeejoin' => $user['selectfeejoin'],
                            'selecttirp' => $user['selecttirp'],
                            'selectworkshop' => $user['selectworkshop'],
                            'tokerpayment' => $user['tokerpayment'],
                            'paymentExpiry' => $user['paymentExpiry'],
                            'statusPayment' => $user['statusPayment'],
                            'food' => $user['food'],
                            'respCode' => $decoded_array['respCode'],
                            'respDesc' => $decoded_array['respDesc'],
                        );
                        return Response::success($response_data, 'Success');
                    };
                }
            } else {
                return Response::error('Not Found', 404);
            }
        }
    } else {
        return Response::error('Not Found', 404);
    }
} else {
    Response::error('Method Error', 500);
}

function sendEmail ($send) {
    if ($send['sendemail'] === 'false' && $send['statusPayment'] === 'success') {

        $sendemail = "true";
        $updataSendEmail = "UPDATE tbl_register_users SET sendemail = ? WHERE userId = ?";
        $updataSendEmailParams = array($sendemail, $send['userId']);

        $updataSendEmailQuery = DB::query($updataSendEmail, $updataSendEmailParams);

        if (!empty($updataSendEmailQuery)) {
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
                $mail->setFrom($response['email'], 'Confirmation of Registration for ISAH & SEAOHUN International Conference 2024');
                $mail->addAddress($response['email']);
                $mail->Subject = 'Confirmation of Registration for ISAH & SEAOHUN International Conference 2024';
        
                $mail->Body = '
                Dear ' . $response['fullname'] . ',<br><br>' .
        
                'Thank you for registering for the <b>ISAH & SEAOHUN International Conference 2024,</b> scheduled to be held at Shangri-La Chiang Mai, from September 16 to 20, 2024.<br><br>' .
        
                'We are pleased to confirm that your registration, along with the registration fee payment, has been successfully completed. For the further information, please visit the conference website:<br>' .
                '<a href="' . $response['websiteURL'] . '">' . $response['websiteURL'] . '</a><br><br>' .
                 
                'If you have any questions, please do not hesitate to contact us.<br><br>'.
        
                'We look forward to welcoming you to the ISAH & SEAOHUN International Conference 2024!'.
        
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
                return Response::success($send, 'Success');
            } catch (Exception $e) {
                Response::error("Failed to send email: " . $e->getMessage(), 500);
            }
        } 
    } else {  
        return Response::success($send, 'Success');
    }
   


}
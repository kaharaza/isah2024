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
        return Response::success($reQuestClient, 'Success');
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
                    "paymentExpiry" => date('2024-09-31 23:59:59'),
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
                                Response::success($response, 'Success');
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

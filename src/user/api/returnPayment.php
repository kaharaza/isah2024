<?php
include_once './../../../config/connectdb.php';
require_once '../../vendor/autoload.php';
header('Content-Type: application/json');

use Firebase\JWT\JWT;
use Firebase\JWT\Key;


if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (isset($_POST['payload'])) {
        $payload = $_POST['payload'];

        $payloadPasams = array(
            'userId' => Helper::clean($payload['userId']),
            'amount' => $payload['amount'],
        );

        $config = include_once('../../../config/config_payment.php');

        $sck = $config['secretkey'];
        $merchantID = $config['merchantID'];
    
        $payloadPayment = array(
            "merchantID" => $merchantID,
            "invoiceNo" => $payloadPasams['userId'],
            "description" => "Registration fee for ISAH & SEAOHUN International Conference 2024",
            "amount" => $payload['amount'],
            "currencyCode" => "USD",
        );


        $jwt_token = JWT::encode($payloadPayment, $sck, 'HS256');
        $data = '{"payload":"' . $jwt_token . '"}';

        $api_end = 'https://pgw.2c2p.com/payment/4.3/paymentToken';

        $http = new HTTP();
        $response = $http->post($api_end, $data);

        if ($response === false) {
            return Response::error('NotfoundPaymentToken', 500);
        } else {
            $decoded = json_decode($response, true);
            $payloadResponse = $decoded['payload'];
            $decodedPayload = JWT::decode($payloadResponse, new Key($sck, 'HS256'));

            $decoded_array = (array) $decodedPayload;

            if (!empty($decoded_array)) {
                return Response::success($decoded_array['webPaymentUrl'], 200);
            }


        }
    } else {
        return Response::error('Not Found', 404);
    }
} else {
    Response::error('Method Error', 500);
}



<?php
$currentProtocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$currentHostname = $_SERVER['HTTP_HOST'];

$url = $currentProtocol . '://' . $currentHostname . '/isahcmu/src/user/singin';
$urlBackend = $currentProtocol . '://' . $currentHostname . '/isahcmu/src/user/api/resp_api';

//demo 2c2p

// return [
//     'secretkey' => '76EBAB619DB68E431111E6D42810B7202F7880BF2E8DB16D7E8AEB919E8B8332',
//     'merchantID' => '014012023009558',
//     'api_endpoint' => 'https://sandbox-pgw.2c2p.com/payment/4.3/paymentToken',
//     'api_inpoint' => 'https://sandbox-pgw.2c2p.com/payment/4.3/paymentInquiry',
//     'url_redirect' => $url
// ];




// 2c2p

return [
    'secretkey' => 'F1C7F9B60BC6D7D7079F002BD99E204C71B12BEB8761B442EF5E639DB096A039',
    'merchantID' => '014012023009558',
    'api_endpoint' => 'https://pgw.2c2p.com/payment/4.3/paymentToken',
    'api_inpoint' => 'https://pgw.2c2p.com/payment/4.3/paymentInquiry',
    'url_redirect' => $url,
];


class HTTP {
    function post($url, $fields_string)
    {
        //open connection
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
        ));

        //execute post
        $result = curl_exec($ch);
        
        //close connection
        curl_close($ch);

        return $result;
    }
}
<?php
$config = include_once('./config/authen.php');

$authorizationURL = $config['authenURL'];
$params = array(
    'response_type' => 'code',
    'client_id' => $config['clientID'],
    'redirect_uri' => $config['redirectURI'],
    'scope' => $config['scope'],
    'state' => $config['state']
);

// return Response::success($params, 200);

$authURL = $authorizationURL . '?' . http_build_query($params);

$code = isset($_GET['code']) ? $_GET['code'] : null;
if (!$code) {
    header('Location: ' . $authURL);
    exit;
} else {
    $clientSecret = 'mHdaXK7a1aMy2xDuw9aNVpePmNTYRkGSzhTxRw6m';
    $grantType = 'authorization_code';

    $postData = http_build_query(array(
        'code' => $code,
        'redirect_uri' => $config['redirectURI'],
        'client_id' => $config['clientID'],
        'client_secret' => $clientSecret,
        'grant_type' => $grantType
    ));

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://oauth.cmu.ac.th/v1/GetToken.aspx');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);

    if ($result && isset($result['access_token'])) {
        $accessToken = $result['access_token'];
        $_SESSION['accessToken'] = $accessToken;
        $apiURL = 'https://misapi.cmu.ac.th/cmuitaccount/v1/api/cmuitaccount/basicinfo';

        $headers = [
            'Authorization: Bearer ' . $accessToken
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiURL);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            // Handle error
            echo 'Curl error: ' . curl_error($ch);
        } else {
            $mishrInfo = json_decode($response, true);
            $oauthAll = [
                'mishrInfo' => $mishrInfo,
                'Token' => $accessToken,
            ];

            if ($oauthAll['mishrInfo']['itaccounttype_id'] !== 'MISEmpAcc') {
                header('Location: ' . $authURL);
            } else {

                // print_r(json_decode(json_encode($oauthAll, JSON_UNESCAPED_UNICODE), true));


                $_SESSION['email'] = $oauthAll['mishrInfo']['cmuitaccount'];
                $_SESSION['firstname_TH'] = $oauthAll['mishrInfo']['firstname_TH'];
                $_SESSION['lastname_TH'] = $oauthAll['mishrInfo']['lastname_TH'];
                $_SESSION['organization_code'] = $oauthAll['mishrInfo']['organization_code'];
                $_SESSION['itaccounttype_id'] = $oauthAll['mishrInfo']['itaccounttype_id'];
                $_SESSION['accessToken'] = $oauthAll['Token'];

                if (!empty($_SESSION['accessToken'])) {
                    header('Location: pages/dashboard');
                    exit;
                }
                // echo '<pre>';
                // echo 'Email: ' . $_SESSION['email'];
                // echo '<br>';
                // echo 'Firstname_TH: ' . $_SESSION['firstname_TH'];
                // echo '<br>';
                // echo 'Lastname_TH: ' . $_SESSION['lastname_TH'];
                // echo '<br>';
                // echo 'Organization_code: ' . $_SESSION['organization_code'];
                // echo '<br>';
                // echo 'Itaccounttype_id: ' . $_SESSION['itaccounttype_id'];
                // echo '<br>';
                // echo 'accessToken: ' . $_SESSION['accessToken'];
                // echo '</pre>';
            }
            curl_close($ch);
        }
    } else {
        header('Location: ' . $authURL);
        exit;
    }
}

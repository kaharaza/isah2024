<?php
include_once './../../../config/connectdb.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['payload'])) {
        $payload = $_POST['payload'];
        
        $payloadParams = array(
            'userId' => Helper::clean($payload['userId']),
            'pwd' => hash('sha256', $payload['pwd']),
        );

        
        $updateData = "UPDATE tbl_register_users SET pwd = ? WHERE userId = ?";
        $updateDataParams = array($payloadParams['pwd'], $payloadParams['userId']);
        
        $updataDataQuery = DB::query($updateData, $updateDataParams);
        
        if (!empty($updataDataQuery)) {
            return Response::success($updataDataQuery, 'Success');
        }
        


    } else {
        Response::error('NOT FOUND', 404);
    }

} else {
    Response::error("METHOD ERROR", 500);
}
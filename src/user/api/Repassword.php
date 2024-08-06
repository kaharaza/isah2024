<?php
include_once './../../../config/connectdb.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['reQuest'])) {
        $reQuest = $_POST['reQuest'];

        $reQuestParams = array(
            'userId' => Helper::clean($reQuest['userId']),
            'email' => Helper::clean($reQuest['email']),
        );

        $selectCheckData = "SELECT userId , prefix, firstname, lastname  FROM tbl_register_users WHERE userId = ? AND email = ?";
        $selectCheckParams = array($reQuestParams['userId'], $reQuestParams['email']);
        $selectCheckQuery = DB::query($selectCheckData, $selectCheckParams);

        if (!empty($selectCheckQuery)) {
            $user = $selectCheckQuery[0];
            return Response::success($user, 'Success');
        } else {
            return Response::error('NOT FOUND', 404);
        }
        // return Response::success($selectCheckParams, 200);
    } else {
        Response::error('Not found', 404);
    }
} else {
    Response::error('METHOD ERROR', 500);
}
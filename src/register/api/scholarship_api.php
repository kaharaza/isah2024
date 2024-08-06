<?php

require_once './../../../config/connectdb.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['reRequest'])) {
        $reQuestClient = $_POST['reRequest'];

        $checkEmail = Helper::clean($reQuestClient['email']);

        $selectCheckEmail = "SELECT email FROM tbl_scholarship WHERE email = ?";
        $selectCheckParams = array($checkEmail);
        $selectCheckQuery = DB::query($selectCheckEmail,$selectCheckParams);

        if (!empty($selectCheckQuery)) {
            Response::error('DuplicateEmail', 400);
        } else {

            $insertScholarship = "INSERT INTO `tbl_scholarship`(`prefix`, `first_name`, `last_name`, `organization`, `email`, `selectstatus`, `country`, `scholarship`, `createdAt`, `updatedAt`)
                                  VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? )";

            $insertScholarshipParams = array(
                Helper::clean($reQuestClient['prxfix']),
                Helper::clean($reQuestClient['name']),
                Helper::clean($reQuestClient['last']),
                Helper::clean($reQuestClient['organ']),
                Helper::clean($reQuestClient['email']),
                Helper::clean($reQuestClient['member']),
                Helper::clean($reQuestClient['country']),
                Helper::clean($reQuestClient['scholarship']),
                date('Y-m-d H:i:s'),
                date('Y-m-d H:i:s')
            );

            $insertScholarshipQuery = DB::query($insertScholarship, $insertScholarshipParams);

            if (!empty($insertScholarshipQuery)) {
                return Response::success($insertScholarshipQuery, 'Success');
            } else {
                Response::error('Error Http Method', 500);
            }
        }
    } else {
        Response::error('Not found', 404);
    }

} else {
    Response::error('Method error', 500);
}
<?php
require_once('./../../../config/connectdb.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['accessToken'])) {
        $selectlist = 'SELECT `userId`, `prefix`, `firstname`, `lastname`, `email`, `organization`, `country`, `selectStatus`, `attend`, `fee`, `feejoins`, `selectfeejoin`, `selecttirp`, `selectworkshop`, `total`, `food`, `scholarship`, `checkDate`, `tokerpayment`, `paymentExpiry`, `statusPayment`, `sendemail`, `createdAt`, `updatedAt` 
                       FROM `tbl_register_users` ORDER BY `updatedAt` DESC';
        $selectlistQuery = DB::query($selectlist);
        if (!empty($selectlistQuery)) {
            return Response::success($selectlistQuery, 200);
        }
    } else {
        Response::error('Not found', 404);
    }
} else {
    Response::error('Method error', 500);
}

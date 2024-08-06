<?php
require_once('./../../../config/connectdb.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['accessToken']) && $_GET['data'] === 'success') {
        $checkSuccess = $_GET['data'];
        $selectlist = 'SELECT `userId`, `prefix`, `firstname`, `lastname`, `email`, `organization`, `country`, `selectStatus`, `attend`, `fee`, `feejoins`, `selectfeejoin`, `selecttirp`, `selectworkshop`, `total`, `food`, `scholarship`, `checkDate`, `tokerpayment`, `paymentExpiry`, `statusPayment`, `sendemail`, `createdAt`, `updatedAt` 
                       FROM `tbl_register_users` WHERE statusPayment = ? ORDER BY `updatedAt` DESC';
        $selectParams = array($checkSuccess);   
        $selectlistQuery = DB::query($selectlist, $selectParams);
        if (!empty($selectlistQuery)) {
            return Response::success($selectlistQuery, 200);
        } else {
            return Response::error('Not found', 404);
        }
    } if (isset($_SESSION['accessToken']) && $_GET['data'] === 'rejected') {
        $checkSuccess = $_GET['data'];
        $selectlist = 'SELECT `userId`, `prefix`, `firstname`, `lastname`, `email`, `organization`, `country`, `selectStatus`, `attend`, `fee`, `feejoins`, `selectfeejoin`, `selecttirp`, `selectworkshop`, `total`, `food`, `scholarship`, `checkDate`, `tokerpayment`, `paymentExpiry`, `statusPayment`, `sendemail`, `createdAt`, `updatedAt` 
                       FROM `tbl_register_users` WHERE statusPayment = ? ORDER BY `updatedAt` DESC';
        $selectParams = array($checkSuccess);   
        $selectlistQuery = DB::query($selectlist, $selectParams);
        if (!empty($selectlistQuery)) {
            return Response::success($selectlistQuery, 200);
        } else {
            return Response::error('Not found', 404);
        }
    }
    
    else {
        return Response::error('Not found', 404);
    }
} else {
    return Response::error('Method error', 500);
}

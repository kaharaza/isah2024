<?php 
require_once('./../../../config/connectdb.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['accessToken'])) {
        $selectlist = 'SELECT `firstname`, `lastname`, `email`, `category`, `scholarship`, `country`, `research_title`, `topic`, `link_title`, `link_main`, `link_table`, `prefer`, `createdAt`, `updatadAt` 
                       FROM `tbl_research` ORDER BY `updatadAt` DESC'; 
        $selectlistQuery = DB::query($selectlist);
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
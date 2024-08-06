<?php 
require_once('./../../../config/connectdb.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['accessToken'])) {
        $selectlist = 'SELECT `id`,`firstname`, `lastname`, `email`, `category`, `scholarship`, `country`, `research_title`, `topic`, `link_research`, `prefer`, `createdAt`, `updatedAt` 
                       FROM `tbl_research_only` ORDER BY `updatedAt` DESC'; 
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
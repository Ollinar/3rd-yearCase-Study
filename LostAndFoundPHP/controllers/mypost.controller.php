<?php
if (strtoupper($_SERVER['REQUEST_METHOD']) === "GET") {
    if (!isset($_SESSION['userID'])) {
        require_once('views/landing.html.php');
        die();
    }
    if ($_SESSION['userRole'] === 'admin') {
        redirect('/', 302);
        die();
    }
    $postList = $dao->queryDB("SELECT col_postID as 'postID',col_itemName as 'itemName', col_itemDescription 'itemDescription',
    col_date as 'date',getUsernameByID(col_userID) AS 'username', 
    getUserEmailByID(col_userID) AS 'userEmail'
    from tbl_lostpost WHERE col_userID=?", [$_SESSION['userID']])->fetchAll();

    require_once('views/mypost.html.php');
}
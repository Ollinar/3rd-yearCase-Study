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
    $postList = $dao->queryDB("CALL getItemsFilteredByUserID(?)", [$_SESSION['userID']])->fetchAll();

    foreach ($postList as $index => $rows) {
        $picUri = $dao->queryDB('CALL getItemPic(?)', [$rows['itemID']])->fetchAll();

        $picList = array();
        foreach ($picUri as $pic) {
            array_push($picList, osPathToURLPath($pic['picURI']));
        }
        $postList[$index]['postPic'] = $picList;
    }

    require_once('views/mypost.html.php');
}
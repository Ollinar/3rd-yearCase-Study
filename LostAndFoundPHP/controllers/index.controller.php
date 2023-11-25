<?php

if (strtoupper($_SERVER['REQUEST_METHOD']) === "GET") {
    if (!isset($_SESSION['userID'])) {
        require_once('views/landing.html.php');
        die();
    }


    $lostCount = $dao->queryDB("SELECT COUNT(*) AS `count` FROM tbl_items where colStatusID = getStatusID('lost')")->fetch();
    $lostCount=$lostCount? $lostCount['count']:0;
    $uncalimedCount = $dao->queryDB("SELECT COUNT(*) AS `count` FROM tbl_items where colStatusID=getStatusID('uncalimed')")->fetch();
    $uncalimedCount=$uncalimedCount? $uncalimedCount['count']:0;
    $claimedCount = $dao->queryDB("SELECT COUNT(*) AS `count` FROM tbl_items where colStatusID=getStatusID('claimed')")->fetch();
    $claimedCount=$claimedCount? $claimedCount['count']:0;
    
    if (isset($_GET['type'])) {
        $type = $_GET['type'];
        $postList;
        $tblToGet;
        if ($type == 'lost') {
            $tblToGet = 1;
            if (isset($_GET['q'])) {
                $postList = $dao->queryDB('CALL getPostByItemName(?,1)', [$_GET['q']])->fetchAll();
            } else {
                $postList = $dao->queryDB('CALL getItems("lost")')->fetchAll();
            }
        } else if ($type == 'uncalimed') {
            $tblToGet = 2;
            if (isset($_GET['q'])) {
                $postList = $dao->queryDB('CALL getPostByItemName(?,2)', [$_GET['q']])->fetchAll();
            } else {
                $postList = $dao->queryDB('CALL getItems("unclaimed")')->fetchAll();
            }
        } else if ($type == 'claimed') {
            $tblToGet = 2;
            if (isset($_GET['q'])) {
                $postList = $dao->queryDB('CALL getPostByItemName(?,3)', [$_GET['q']])->fetchAll();
            } else {
                $postList = $dao->queryDB('CALL getItems("claimed")')->fetchAll();
            }
        }
        foreach ($postList as $index => $rows) {
            $picUri = $dao->queryDB('CALL getItemPic(?,?)', [$rows['itemID']])->fetchAll();

            $picList = array();
            foreach ($picUri as $pic) {
                array_push($picList, osPathToURLPath($pic['picURI']));
            }
            $postList[$index]['postPic'] = $picList;
        }
        if (isset($_SERVER['HTTP_HX_REQUEST'])){
            require('views/fragments/feedCard.php');
            require('views/fragments/searchbar.php');
            require('views/fragments/tabCard.php');
            die();
        }
        
    }


    require('views/home.html.php');
}

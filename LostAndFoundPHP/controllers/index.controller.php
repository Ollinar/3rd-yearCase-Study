<?php

if (strtoupper($_SERVER['REQUEST_METHOD']) === "GET") {
    if (!isset($_SESSION['userID'])) {
        require_once('views/landing.html.php');
        die();
    }


    $lostCount = $dao->queryDB("SELECT COUNT(*) AS `count` FROM tbl_items where colStatusID = getStatusID('lost')")->fetch();
    $lostCount=$lostCount? $lostCount['count']:0;
    $foundCount = $dao->queryDB("SELECT COUNT(*) AS `count` FROM tbl_items where colStatusID=getStatusID('found')")->fetch();
    $foundCount=$foundCount? $foundCount['count']:0;
    $unclaimedCount = $dao->queryDB("SELECT COUNT(*) AS `count` FROM tbl_items where colStatusID=getStatusID('unclaimed')")->fetch();
    $unclaimedCount=$unclaimedCount? $unclaimedCount['count']:0;
    $claimedCount = $dao->queryDB("SELECT COUNT(*) AS `count` FROM tbl_items where colStatusID=getStatusID('claimed')")->fetch();
    $claimedCount=$claimedCount? $claimedCount['count']:0;
    
    if (isset($_GET['type'])) {
        $type = $_GET['type'];
        $postList = array();
        $tblToGet;
        if ($type == 'lost') {
            $tblToGet = 1;
            if (isset($_GET['q'])) {
                $postList = $dao->queryDB('CALL getItemByItemName(?,"lost")', [$_GET['q']])->fetchAll();
            } else {
                $postList = $dao->queryDB('CALL getItems("lost")')->fetchAll();
            }
        }else if ($type == 'found') {
            $tblToGet = 2;
            if (isset($_GET['q'])) {
                $postList = $dao->queryDB('CALL getItemByItemName(?,"found")', [$_GET['q']])->fetchAll();
            } else {
                $postList = $dao->queryDB('CALL getItems("found")')->fetchAll();
            }
        } else if ($type == 'unclaimed') {
            $tblToGet = 2;
            if (isset($_GET['q'])) {
                $postList = $dao->queryDB('CALL getItemByItemName(?,"unclaimed")', [$_GET['q']])->fetchAll();
            } else {
                $postList = $dao->queryDB('CALL getItems("unclaimed")')->fetchAll();
            }
        } else if ($type == 'claimed') {
            $tblToGet = 2;
            if (isset($_GET['q'])) {
                $postList = $dao->queryDB('CALL getItemByItemName(?,"claimed")', [$_GET['q']])->fetchAll();
            } else {
                $postList = $dao->queryDB('CALL getItems("claimed")')->fetchAll();
            }
        }
        foreach ($postList as $index => $rows) {
            $picUri = $dao->queryDB('CALL getItemPic(?)', [$rows['itemID']])->fetchAll();
            $cmnts = $dao->queryDB('CALL getComments(?)', [$rows['itemID']])->fetchAll();

            $picList = array();
            foreach ($picUri as $pic) {
                array_push($picList, osPathToURLPath($pic['picURI']));
            }
            $postList[$index]['postPic'] = $picList;
            foreach($cmnts as $cmtInd => $cmt){
                $rpls = $dao->queryDB('CALL getReplies(?)',[$cmt['commentID']])->fetchAll();
                $cmnts[$cmtInd]['replies'] = $rpls;
            }
            $postList[$index]['comments'] =  $cmnts;
        }
        if (isset($_SERVER['HTTP_HX_REQUEST'])){
            require('views/fragments/feedCard.php');
            require('views/fragments/searchbar.php');
            require('views/fragments/tabCard.php');
            require('views/fragments/updateFormPopUp.php') ;
            die();
        }
        
    }


    require('views/home.html.php');
}

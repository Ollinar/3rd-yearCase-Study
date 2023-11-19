<?php

if(strtoupper($_SERVER['REQUEST_METHOD']) === "GET"){
    if (!isset($_SESSION['userID'])) {
        require_once('views/landing.html.php');
        die();
    }

    if (isset($_GET['type'])) {
        $type = $_GET['type'];
        $postList;
        $tblToGet;
        if ($type == 'lost') {
            $postList = $dao->queryDB('CALL getPost(1)')->fetchAll();
            $tblToGet = 1;
        }
        if ($type == 'found') {
            $postList = $dao->queryDB('CALL getPost(2)')->fetchAll();
            $tblToGet = 2;
        }
        foreach ($postList as $index=>$rows) {
            $picUri = $dao->queryDB('CALL getpic(?,?)',[$rows['postID'],$tblToGet])->fetchAll();
            
            $picList = array();
            foreach ($picUri as $pic) {
                array_push($picList, osPathToURLPath($pic['picURI']));
            }
            $postList[$index]['postPic'] = $picList;
        }
    }


    require_once('views/home.html.php');
}

<?php
if (!isset($_SESSION['userID'])) {
    hxRedirect('/', 302);
    die();
}

if (strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') {
    hxRedirect('/', 302);
    die();
}
if (!isset($_POST['type'])||!isset($_POST['id'])) {
    hxRedirect('/', 302);
    die();
}


if($_POST['type'] === 'lost'){
    $res = $dao->queryDB("SELECT getPosterID(?) AS 'posterID'",[$_POST['id']])->fetch();
    if($_SESSION['userRole'] !=='admin'&&(!$res && $res['posterID'] !== $_SESSION['userID'])){
        hxRedirect('/', 302);
        die();
    }
    //delelte lost post
    $dao->queryDB('CALL deleteItem(?)',[$_POST['id']]);
    echo 'lost post deleted';

}else if($_POST['type'] === 'unclaimed'){
    if ($_SESSION['userRole'] !== 'admin') {
        hxRedirect('/', 302);
        die();
    }
    //dlete found post
    $dao->queryDB('CALL deleteItem(?)',[$_POST['id']]);
}else if($_POST['type'] === 'claimed'){
    if ($_SESSION['userRole'] !== 'admin') {
        hxRedirect('/', 302);
        die();
    }
    //dlete found post
    $dao->queryDB('CALL deleteItem(?)',[$_POST['id']]);
}
$type=$_POST['type'];
hxRedirect("/?type=$type", 200);

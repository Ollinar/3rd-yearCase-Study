<?php

if (!isset($_SESSION['userID'])) {
    hxRedirect('/', 302);
    die();
}

if (strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') {
    hxRedirect('/', 302);
    die();
}

if (!isset($_POST['commentID'])) {
    http_response_code(400);
    die();
}

$cmntrID=$dao->queryDB('SELECT getCommentorID(?) AS "id"', [$_POST['commentID']])->fetch();
if($_SESSION['userRole'] !=='admin'&&(!$cmntrID && $cmntrID['posterID'] !== $_SESSION['userID'])){
    hxRedirect('/', 302);
    die();
}
$dao->queryDB('CALL deleteComment(?)',[$_POST['commentID']]);
parse_str(parse_url($_SERVER['HTTP_HX_CURRENT_URL'])['query'],$res);
$type=$res['type']??'';
hxLocation("/?type=$type", '#cardCont',200);
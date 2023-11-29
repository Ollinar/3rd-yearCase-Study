<?php

if (!isset($_SESSION['userID'])) {
    hxRedirect('/', 302);
    die();
}

if (strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') {
    hxRedirect('/', 302);
    die();
}

if (!isset($_POST['replyID'])) {
    http_response_code(400);
    die();
}

$replrID=$dao->queryDB('SELECT getReplierID(?) AS "id"', [$_POST['replyID']])->fetch();
if($_SESSION['userRole'] !=='admin'&&(!$replrID && $replrID['id'] !== $_SESSION['userID'])){
    hxRedirect('/', 302);
    die();
}
$dao->queryDB('CALL deleteReply(?)',[$_POST['replyID']]);
parse_str(parse_url($_SERVER['HTTP_HX_CURRENT_URL'])['query'],$res);
$type=$res['type']??'';
hxLocation("/?type=$type", '#cardCont',200);
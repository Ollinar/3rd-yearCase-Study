<?php
if (!isset($_SESSION['userID'])) {
    hxRedirect('/', 302);
    die();
}

if (strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') {
    hxRedirect('/', 302);
    die();
}


if (!isset($_POST['id']) || !isset($_POST['reply'])) {
    $error="Fill up all fields";
    require_once('views/fragments/replyForm.php');
    http_response_code(400);
    die();
}
if ($_POST['id'] === '' || $_POST['reply'] === '') {
    $error="Fill up all fields";
    require_once('views/fragments/replyForm.php'); 
    http_response_code(400);
    die();
}

$dao->queryDB('CALL insertNewReply(?,?,?)', [$_POST['id'], $_SESSION['userID'],$_POST['reply']]);
require_once('views/fragments/replyForm.php'); 
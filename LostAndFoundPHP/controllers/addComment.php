<?php
if (!isset($_SESSION['userID'])) {
    hxRedirect('/', 302);
    die();
}

if (strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') {
    hxRedirect('/', 302);
    die();
}


if (!isset($_POST['id']) || !isset($_POST['comment'])) {
    $error="Fill up all fields";
    require_once('views/fragments/commentForm.php');
    http_response_code(400);
    die();
}
if ($_POST['id'] === '' || $_POST['comment'] === '') {
    $error="Fill up all fields";
    require_once('views/fragments/commentForm.php');
    http_response_code(400);
    die();
}

$dao->queryDB('CALL insertComment(?,?,?)', [$_POST['id'], $_SESSION['userID'],$_POST['comment']]);
require_once('views/fragments/commentForm.php'); 
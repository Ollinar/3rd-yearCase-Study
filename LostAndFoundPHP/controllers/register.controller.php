<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/util.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/debugUtil.php");

if (strtoupper($_SERVER['REQUEST_METHOD']) === "GET") {
    $stud_id = "";
    $username = "";
    $password_1 = "";
    $password_2 = "";
    require 'views/register.html.php';
} else {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($username) || empty($password) || empty($email)) {
        redirect('/register', 303);
        die();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        redirect('/register', 303);
        die();
    }
    $entry = $dao->queryDB('CALL getUser(?)', [$username])->fetchAll();
    if (!empty($entry)) {
        redirect('/register', 303);
        die();
    }
    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo "test";
}

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/util.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/debugUtil.php");

if (isset($_SESSION['userID'])) {
    redirect('/',302);
    die();
}

if (strtoupper($_SERVER['REQUEST_METHOD']) === "GET") {
    require 'views/login.html.php';
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $_SESSION['errors']= 'Please Fill All Fields';
        redirect('/login', 303);
        die();
    }

    $entry = $dao->queryDB('CALL getUserByUsername(?)', [$username])->fetch();


    if (empty($entry)) {
        $_SESSION['errors']= 'Not Registered';
        redirect('/login', 303);
        die();

        //should use verify_password
    } else if (password_verify($password, $entry['userPassword'])) {
        $_SESSION['userID'] = $entry['userID'];
        $_SESSION['username'] = $username;
        $_SESSION['userEmail'] = $entry['userEmail'];
        $_SESSION['userRole'] = $entry['userRole'];
        redirect('/',302);
        die();
    } else {
        var_dump($entry);
        $_SESSION['errors']= 'Wrong Password';
        redirect('/login', 303);
        die();
    }
}
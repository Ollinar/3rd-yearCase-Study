<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/util.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/debugUtil.php");

if (isset($_SESSION['userID'])) {
    redirect('/',302);
    die();
}


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
    $passwordConf = $_POST['passwordConf'];
    $userCaptch = $_POST['g-recaptcha-response'];
    
    if (empty($userCaptch)) {
        $error = "Please complete the captcha";
        require('views/fragments/register_fields.php');
        die();
    }
    $recaptcha = new \ReCaptcha\ReCaptcha($config['recaptcha']['secret-key']);
    $response = $recaptcha->verify($userCaptch,getUserIpAddr());
    
    if (!$response->isSuccess()) {
        $error = "Somthing went wrong with captcha";
        require('views/fragments/register_fields.php');
        resetCaptcha();
        die();
    }
    

    if (empty($username) || empty($password)||empty($passwordConf) || empty($email)) {
        $error = "Please Fill All Fields";
        require('views/fragments/register_fields.php');
        resetCaptcha();
        die();
    }
    $entry = $dao->queryDB('CALL getUserByUsername(?)', [$username])->fetchAll();
    if (!empty($entry)) {
        $error = "Username already taken";
        require('views/fragments/register_fields.php');
        resetCaptcha();
        die();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please Enter A Valid E-mail";
        require('views/fragments/register_fields.php');
        resetCaptcha();
        die();
    }
    if (strlen($password) < 8) {
        $error = "Password too short";
        require('views/fragments/register_fields.php');
        resetCaptcha();
        die();
    }

    if($password !== $passwordConf){
        $error = "Passwords doesn't match";
        require('views/fragments/register_fields.php');
        resetCaptcha();
        die();
    }
    $hash = password_hash($password, PASSWORD_ARGON2ID);
    $res = $dao->queryDB("CALL createUser(?,?,?)", [ $hash,$email,$username])->fetch();

    if(!empty($res)){
        $_SESSION['userID'] = $res['userID'];
        $_SESSION['username'] = $username;
        $_SESSION['userEmail'] = $email;
        $_SESSION['userRole'] = 'user';
        hxRedirect('/', 303);
        die();
    }else {
        $error = "Failed to regsiter";
        require('views/fragments/register_fields.php');
        resetCaptcha();
        die();
    }
}

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
    $studIDNum = $_POST['studID'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];
    
    if (empty($username) || empty($password)||empty($passwordConf) || empty($email) || empty($studIDNum)) {
        $_SESSION['errors'] = "Please Fill All Fields";
        redirect('/register', 303);
        die();
    }
    $entry = $dao->queryDB('CALL getUserByUsername(?)', [$username])->fetchAll();
    if (!empty($entry)) {
        $_SESSION['errors'] = "Username already taken";
        redirect('/register', 303);
        die();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors'] = "Please Enter A Valid E-mail";
        redirect('/register', 303);
        die();
    }
    if (strlen($password) < 8) {
        $_SESSION['errors'] = "Password too short";
        redirect('/register', 303);
        die();
    }

    if($password !== $passwordConf){
        $_SESSION['errors'] = "Passwords doesn't match";
        redirect('/register', 303);
        die();
    }
    $hash = password_hash($password, PASSWORD_ARGON2ID);
    $dao->queryDB('INSERT INTO tbl_user (col_StudNum,col_username,col_password,col_email) VALUES (?,?,?,?)', [$studIDNum,$username, $hash,$email]);
    $res = $dao->queryDB('SELECT col_userID AS userID FROM tbl_user WHERE col_username = ?',[$username])->fetch();

    if(!empty($res)){
        $_SESSION['userID'] = $res['userID'];
        $_SESSION['username'] = $username;
        $_SESSION['userEmail'] = $email;
        $_SESSION['userRole'] = 'user';
        redirect('/', 303);
        die();
    }
}

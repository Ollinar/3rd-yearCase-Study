<?php
require_once( $_SERVER['DOCUMENT_ROOT']."/util.php");
require_once( $_SERVER['DOCUMENT_ROOT']."/debugUtil.php");


if (strtoupper($_SERVER['REQUEST_METHOD']) === "GET") {
    require 'views/login.html.php';
}else{
    $_SESSION['errors'] = array();
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        array_push($_SESSION['errors'],'Please Fill All Fields');
        redirect('/login',303);
        die();
    }
    try{

        $entry = $dao->queryDB('CALL getUser(?)',[$username])->fetch();
    }catch(PDOException $e){
        redirect('/login',504);

        die();
    }

    if (!$entry) {
        redirect('/login',504);
    }
    if (empty($entry)) {
        array_push($_SESSION['errors'],'Not Registered');
        redirect('/login',303);
        die();

        //should use verify_password
        
    }else if($entry['userPassword'] === $password){
        var_dump($entry);
        redirect('/dashboard');
        die();
    }else{
        var_dump($entry);
        array_push($_SESSION['errors'],'Wrong Password');
        redirect('/login',303);
        die();
    }
}
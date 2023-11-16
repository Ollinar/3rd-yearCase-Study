<?php

if(strtoupper($_SERVER['REQUEST_METHOD']) === "GET"){
    if (isset($_SESSION['userID'])) {
        require_once('views/home.html.php');
        die();
    }
    require 'views/landing.html.php';
}
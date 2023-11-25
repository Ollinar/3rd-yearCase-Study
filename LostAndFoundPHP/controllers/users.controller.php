<?php
if (!isset($_SESSION['userID'])) {
    hxRedirect('/', 302);
    die();
}

if (strtoupper($_SERVER['REQUEST_METHOD']) === 'GET') {
    $users = $dao->queryDB("CALL getAllUsers()")->fetchAll();
    
    require("views/users.html.php");
}
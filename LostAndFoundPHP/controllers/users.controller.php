<?php
if (!isset($_SESSION['userID'])) {
    hxRedirect('/', 302);
    die();
}

if (strtoupper($_SERVER['REQUEST_METHOD']) === 'GET') {
    $users = $dao->queryDB("SELECT col_studNum AS `studID`,col_username AS `username`,col_email AS `email` FROM tbl_user")->fetchAll();
    
    require("views/users.html.php");
}
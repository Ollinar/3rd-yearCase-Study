<?php
if (!isset($_SESSION['userID'])) {
    hxRedirect('/', 302);
    die();
}

if (strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') {
    hxRedirect('/', 302);
    die();
}
if ($_SESSION['userRole'] !== 'admin') {
    hxRedirect('/', 302);
    die();
}

if (!isset($_POST['id']) || !isset($_POST['from'])) {
    hxRedirect('/', 302);
    die();
}

if ($_POST['from'] === 'unclaimed' && !isset($_POST['claimant'])) {
    hxRedirect('/', 302);
    die();
}
if ($_POST['from'] === 'unclaimed' &&$_POST['claimant'] === '') {
    hxRedirect('/', 302);
    die();
}
if ($_POST['from'] === 'found' && !isset($_POST['claimant'])) {
    hxRedirect('/', 302);
    die();
}
if ($_POST['from'] === 'found' &&$_POST['claimant'] === '') {
    hxRedirect('/', 302);
    die();
}

if ($_POST['from'] === 'unclaimed') {
    $usrToClaim = $dao->queryDB("CALL getUserByUsername(?)", [$_POST['claimant']])->fetchAll();
    if (empty($usrToClaim)) {
        hxRedirect('/', 302);
        die();
    }
    $dao->queryDB('CALL updateItemToClaimed(?,?)', [$_POST['id'], $_POST['claimant']]);
}else if ($_POST['from'] === 'found') {
    $usrToClaim = $dao->queryDB("CALL getUserByUsername(?)", [$_POST['claimant']])->fetchAll();
    if (empty($usrToClaim)) {
        hxRedirect('/', 302);
        die();
    }
    $dao->queryDB('CALL updateItemToClaimed(?,?)', [$_POST['id'], $_POST['claimant']]);
}else if ($_POST['from'] === 'claimed') {
    $dao->queryDB('CALL updateItemFromClaimed(?)', [$_POST['id']]);
}else if ($_POST['from'] === 'lost') {
    $dao->queryDB('CALL updateItemToFound(?)', [$_POST['id']]);
}
$type=$_POST['from'];
hxRedirect("/?type=$type", 200);

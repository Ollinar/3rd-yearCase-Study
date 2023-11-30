<?php
if (!isset($_SESSION['userID'])) {
    hxRedirect('/', 302);
    die();
}

if (strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') {
    hxRedirect('/', 302);
    die();
}
if (!isset($_POST['type'])||!isset($_POST['id'])) {
    hxRedirect('/', 302);
    die();
}


if($_POST['type'] === 'lost' || $_POST['type'] === 'found'){
    //both lost and found needs to be chacked if either the user is admin of the poster
    $res = $dao->queryDB("SELECT getPosterID(?) AS 'posterID'",[$_POST['id']])->fetch();
    if($_SESSION['userRole'] !=='admin'&&(!$res && $res['posterID'] !== $_SESSION['userID'])){
        hxRedirect('/', 302);
        die();
    }
    $dao->queryDB('CALL deleteItem(?)',[$_POST['id']]);

}else if($_POST['type'] === 'unclaimed' || $_POST['type'] === 'claimed'){
    //both unclaimed and claimed can only be deleted by admin
    if ($_SESSION['userRole'] !== 'admin') {
        hxRedirect('/', 302);
        die();
    }
    
    $dao->queryDB('CALL deleteItem(?)',[$_POST['id']]);
}

if(isset(parse_url($_SERVER['HTTP_HX_CURRENT_URL'])['path']) && parse_url($_SERVER['HTTP_HX_CURRENT_URL'])['path'] ==='/mypost' ){
    
    hxLocation("/mypost", '#cardCont',200);
    die();
}
$type=$_POST['type'];
hxLocation("/?type=$type", '#cardCont',200);

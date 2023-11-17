<?php

if (!isset($_SESSION['userID'])) {
    redirect('/', 302);
    die();
}

if (strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') {
    redirect('/', 302);
    die();
}


if (!isset($_POST['postTitle'])) {
    redirect('/', 302);
    die();
}
$postTitle = $_POST['postTitle'];
if (strlen($postTitle) > 50) {
    redirect('/', 302);
    die();
}
$postDesc = $_POST['postDesc'] ?? null;


//verifiying file uploads
//chack to see if there was a file uploaded. issset or empty doesnt work because index 0 is always set to empty string
if ($_FILES['postFiles']['name'][0] !== '') {
    $fileCount = count($_FILES['postFiles']['name']);
    if ($fileCount > 5) {
        redirect('/', 302);
        die();
    }
    $filesUp = $_FILES['postFiles'];
    $imgMimes = ['image/bmp', 'image/jpeg', 'image/x-png', 'image/png', 'image/gif'];
    $imgExt = ['jpeg','jpg','png','bmp'];

    for ($i = 0; $i < $fileCount; $i++) {
        //if this is not set, it means that the server didn't accept it (maybe because its too big)
        if ($filesUp['tmp_name'][$i] === '') {
            redirect('/', 302);
            die();
        }

        if ($filesUp['error'][$i] !== UPLOAD_ERR_OK) {
            redirect('/', 302);
            die();
        }
        if (!is_uploaded_file($filesUp['tmp_name'][$i])) {
            redirect('/', 302);
            die();
        }

        $ext = pathinfo($filesUp['name'][$i], PATHINFO_EXTENSION);

        if (!in_array($ext, $imgExt)) {
            redirect('/', 302);
            die();
        }

        if (!in_array(mime_content_type($filesUp['tmp_name'][$i]), $imgMimes)) {
            redirect('/', 302);
            die();
        }
    }
}
$postID = $dao->queryDB('CALL createpost(?,?,?,?,?)', [$postTitle, $postDesc, isadmin() ? 2 : 1, $_SESSION['userID'], $_SESSION['userRole']])->fetch();


//saving files
if ($_FILES['postFiles']['name'][0] !== '') {
    $fileCount = count($_FILES['postFiles']['name']);
    $fileUpDir = 'postPic';
    $filesUp = $_FILES['postFiles'];

    for ($i = 0; $i < $fileCount; $i++) {
        //if this is not set, it means that the server didn't accept it (maybe because its too big)
        $ext = pathinfo($filesUp['name'][$i], PATHINFO_EXTENSION);
        $newName= uniqid($postID['postID'] .'-'.$i.'-'). '.'.$ext;
        $newPath = join(DIRECTORY_SEPARATOR,[$fileUpDir,$newName]);
        move_uploaded_file($filesUp['tmp_name'][$i], $newPath);
        $dao->queryDB('Call insertpic(?,?,?)',[$postID['postID'],$newPath,$_SESSION['userRole']]);
    }
}
redirect('/',302)
?>
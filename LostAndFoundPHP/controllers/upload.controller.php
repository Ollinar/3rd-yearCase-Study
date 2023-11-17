<?php
if (!isset($_SESSION['userID'])) {
    redirect('/',302);
    die();
}

if (strtoupper($_SERVER['REQUEST_METHOD']) !== 'POST') {
    redirect('/',302);
    die();
}

if (isset($_POST['postTitle'])) {
    redirect('/',302);
    die();
}
$postTitle=$_POST['postTitle'];
if ($postTitle > 50) {
    redirect('/',302);
    die();
}


$postDesc = $_POST['postdesc']??null;
if(isset($_FILES['postFiles'])) {
    $filesUp= $_FILES['postFiles[]'];
    var_dump($filesUp);
    // foreach ($filesUp as $key => $value) {
    // move_uploaded_file($_FILES[''][''],'');

}
$finf = finfo_open(FILEINFO_MIME_TYPE);
?>
<pre>
    <?php

$fileCount = count($_FILES['files']['name']);
$imgTypes = ['image/bmp','image/jpeg','image/x-png','image/png','image/gif'];
for ($i = 0; $i < $fileCount; $i++) {
    if (in_array(mime_content_type($_FILES['files']['tmp_name'][$i]), $imgTypes)) {
        echo 'File:'. $_FILES['files']['name'][$i] .' is good';
    }else{
        echo 'File:'. $_FILES['files']['name'][$i] .' is bad';
    }
}
?>
</pre>



<?php
require_once( $_SERVER['DOCUMENT_ROOT']."/util.php");
require_once( $_SERVER['DOCUMENT_ROOT']."/debugUtil.php");

if (strtoupper($_SERVER['REQUEST_METHOD']) != 'POST') {
    redirect('/login',303);
}


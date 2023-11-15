<?php

function redirect($url, $status = 0) {
    header("Location: ". $url, true, $status);
}

function sanitizeData($data){
    return htmlspecialchars($data);
}
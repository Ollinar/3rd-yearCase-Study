<?php

function redirect($url, $status = 0) {
    header("Location: ". $url, true, $status);
}

function sanitizeData($data){
    return htmlspecialchars($data);
}

function urlis($ulr){
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $ulr;
}
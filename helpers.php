<?php

function view($view, $data = []) {

    foreach ($data as $key => $value) {
        $$key = $value;
    }

    require "views/template/app.php";
}

function dd(...$dumps): void {
    echo "<pre>";
    var_dump(...$dumps);
    echo "</pre>";
    die();
}

function abort($code) {
    http_response_code($code);
    require 'views/template/error.php';
    die();
}
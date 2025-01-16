<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "<pre>";
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] == $value;
}

function abort($code = 404)
{
    http_response_code(404);

    require "views/$code.php";
    die();
}
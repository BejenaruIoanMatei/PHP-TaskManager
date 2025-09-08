<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

function dd($value) 
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function view($path, $attributes = []) 
{
    extract($attributes);
    $fullpath = BASE_PATH . '/app/views/' . $path;

    if (!file_exists($fullpath))
    {
        echo "EROARE: This view does not exist.<br>";
        exit;
    }

    require $fullpath;

}
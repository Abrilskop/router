<?php
    $folderPath = dirname($_SERVER['SCRIPT_NAME']);
    $urlPath = $_SERVER['REQUEST_URI'];
    $url = substr($urlPath,strlen($folderPath));
/*
    echo '<pre>';
    var_dump($_SERVER);
    echo '</pre>';
*/

/*
    echo $folderPath . '<br>';
    echo $urlPath. '<br>';
    echo $url . '<br>';
*/
    define('URL', $url);
?>
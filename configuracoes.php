<?php
    error_reporting(0);

    define('APP_NAME', 'Alpha');
    define('VERSION', '1.0.0');
    define('PATH_SCRIPTS_LIBS', '../libs/');
    define('PATH_LINKS_LIBS', '../libs/');


    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "";

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn -> connect_errno) {
        include_once ('error-404.php');
    }
    
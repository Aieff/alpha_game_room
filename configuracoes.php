<?php
error_reporting(0);

$servername ="localhost";
$database ="alpha_databse";
$username ="root";
$password ="";

$conexao = mysqli_connect ($servername, $username, $password, $database);

if ($conexao == false) {
    include('error-404.php');
    die();
}



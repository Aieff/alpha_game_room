<?php
session_start();
include '../configuracoes.php';

if (empty($_POST['email']) || empty($_POST['password'])) {
    header('Location: ../login.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['loginEmail']);
$senha = mysqli_real_escape_string($conexao, $_POST['loginPassword']);

$query = "SELECT id, email, senha FROM usuarios WHERE email = '{$email}' AND senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: ../app/dashboard.php');
    exit();
} else {
    header('Location: ../login.php');
    exit();
}

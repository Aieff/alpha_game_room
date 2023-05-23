<?php
session_start();
include "../configuracoes.php";

$dados = $_POST;

$acao = $dados['acao'];

if ($acao == "inciaSessao") {

    $email = $dados['email'];
    $senha = $dados['senha'];

    if ($email != '' && $senha != '') {

    $sql = "SELECT id, email, senha FROM usuarios WHERE email = '{$email}' AND senha = md5('{$senha}')";
    $resultado = mysqli_query($conexao, $sql);
    $row = mysqli_num_rows($result);

    if ($row == 1) {
        $_SESSION['email'] = $email;
        header('Location: ../form-complete.php');
        exit();
    } else {
        header('Location: ../login.php');
        exit();
    }

    if ($resultado) {
        $response['error'] = false;
        $response['msg'] = "Sucesso!";
    } else {
        $response['error'] = true;
        $response['msg'] = "Erro!";
        echo mysqli_error($conexao);
    }

    echo json_encode($response);
    }
}


<?php
include "../configuracoes.php";

$dados = $_POST;

$acao = $dados['acao'];

if ($acao == "cadastrarUsuario") {

    $nome = $dados['nome'];
    $sobrenome = $dados['sobrenome'];
    $email = $dados['email'];
    $nascimento = $dados['nascimento'];
    $senha = md5($dados['senha']);
    $genero = $dados['genero'];
    $inicio = $dados['inicio'];

    if($nome != '' && $sobrenome != '' && $email != '' && $nascimento != '' && $senha != '' && $genero != '') {

    $sql = "INSERT INTO usuarios (nome, sobrenome, email, nascimento, senha, genero, inicio) VALUES ('$nome', '$sobrenome', '$email', '$nascimento', '$senha', '$genero', '$inicio')";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        $response['error'] = false;
        $response['msg'] = "Cadastrado com sucesso!";
    } else {
        $response['error'] = true;
        $response['msg'] = "Não foi possível cadastrar o Usuario!";
        echo mysqli_error($conexao);
    }

    echo json_encode($response);
    }
}

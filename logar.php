<?php  
    require_once "./conexao.php";
    require_once "./funcoesContato.php";

    $usuario = $_post['usuario'];
    $senha = $_post['senha'];

    $senhaC = md5($senha);

    $user = logar($conexao, $usuario, $senhaC);

    if(logar($conexao, $usuario, $senhaC) != NULL){
        session_start();
        $_SESSION['id'] = $user['id']
        $_SESSION['usuario'] = $user['nome'];
        header('location: ./index.php');
    }else{
        header('location: ./');

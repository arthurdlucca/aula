<?php  
    require_once "./conexao.php";
    require_once "./funcoesContato.php";

    $usuario = $_post['usuario'];
    $senha = $_post['senha'];

    $senhaC = md5($senha);

    if(logar($conexao, $usuario, $senhaC) != NULL){
        header('location: ./index.php');
    }else{
        header('location: ./');
    }
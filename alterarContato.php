<?php
    require_once "./conexao.php";
    require_once "./funcoesContato.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $id = $_POST['id'];

    if(alterarContato($conexao, $id, $nome, $email, $senha)){
        header('Location: ./index.php?page=Cadastro&alterado=true');
    }
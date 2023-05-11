<?php
    require_once "./conexao.php";
    require_once "./funcoesContato.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $senhaC = md5($senha);

    adicionarContato($conexao, $nome, $email, $senhaC);
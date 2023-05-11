<?php
    require_once "./conexao.php";
    require_once "./funcoesContato.php";

    $id = $_POST['id'];

    excluirContato($conexao, $id);
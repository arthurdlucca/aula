<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$db = "testeProdutos";
$conexao = mysqli_connect($host, $usuario, $senha, $db);
 
if (!$conexao) {
    echo "Erro: Falha ao conectar-se com o banco de dados MySQL.";
    exit;
}
?> 
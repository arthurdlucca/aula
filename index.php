<?php
//Array contendo os itens do menu e seus respectivos caminhos

session_start();
echo "Usuario: " . $_SESSION['usuario'];

$paginas = [
  "Home" => "./php/home.php",
  "Sobre" => "./php/sobre.php",
  "Cadastro" => "./php/contato.php",
  "Contatos" => "./php/listarContatos.php",
  "Login" => "./php/login.php"
];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./materialize/css/materialize.css">
  <title>PHP</title>
</head>

<body>

  <nav>
    <div class="nav-wrapper teal lighten-2">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <?php
        //lista o menu na tela
        foreach ($paginas as $pagina => $valor) {
          echo "<li><a href='?page=$pagina'>$pagina</a></li>";
        }
        ?>
      </ul>
    </div>
  </nav>

  <div class="container teal lighten-5">
    <?php
    $page = "Home";
    //verifica a existência da variável page no ambiente GET
    if (isset(($_GET["page"]))) {
      //if ternário | verifica a existência do valor contido em $_GET['page'] na chave(key) do array $paginas
      $page = array_key_exists($_GET["page"], $paginas) ? $_GET["page"] : "Home";
    }
    
    require_once $paginas[$page]; //importa/insere o arquivo conforme o caminho associado a chave do array páginas
    ?>
  </div>

</body>

</html>

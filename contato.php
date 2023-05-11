<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>

<body>
    <div class="section">
        <h5>Cadastro</h5>
        <p>Página de cadastro de clientes</p>

        <?php
        if (isset($_GET['alterado'])) {
            if ($_GET['alterado'] == true) {
                echo "<div class='green accent-3'>Contato alterado com sucesso!</div>";
            } else {
                echo "<div class='red darken-4'>Contato não alterado!</div>";
            }
        }

        if (!isset($_POST["id"])) {
            //tela de cadastrar
        ?>
            <div class="row">
                <form class="col s12" method="POST" action="./php/addContato.php">
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" class="validate" name="nome">
                            <label class="active lighten-3">Nome</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="email" class="validate" name="email">
                            <label class="active lighten-3">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="password" class="validate" name="senha">
                            <label class="active lighten-3">Senha</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                    </button>
                </form>
            </div>
        <?php
        } else {
            //tela de alterar
            require_once "./php/conexao.php";
            require_once "./php/funcoesContato.php";
            $contato = exibeContato($conexao, $_POST["id"]);
        ?>
            <div class="row">
                <form class="col s12" method="POST" action="./php/alterarContato.php">
                    <div class="row">
                        <input type="hidden" value="<?= $contato[0]['id'] ?>" name="id">
                        <div class="input-field col s6">
                            <input type="text" class="validate" name="nome" value="<?= $contato[0]['nome'] ?>">
                            <label class="active lighten-3">Nome</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="email" class="validate" name="email" value="<?= $contato[0]['email'] ?>">
                            <label class="active lighten-3">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="password" class="validate" name="senha">
                            <label class="active lighten-3">Senha</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Alterar
                    </button>
                </form>
            </div>
        <?php
        }
        ?>


    </div>
</body>

</html>
<?php
require "./php/conexao.php";
require "./php/funcoesContato.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
</head>

<body>
    <div class="section">
        <h5>Lista de Contatos</h5>

        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                $contatos = listarContatos($conexao);
                foreach ($contatos as $contato) {
                ?>
                    <tr>
                        <td><?= $contato['nome'] ?></td>
                        <td><?= $contato['email'] ?></td>
                        <td>
                            <form method="POST" action="./index.php?page=Cadastro">
                                <input type="hidden" name="id" value="<?= $contato['id'] ?>">
                                <input type="submit" value="Alterar" class="waves-effect waves-light btn">
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="./php/excluirContato.php">
                                <input type="hidden" name="id" value="<?= $contato['id'] ?>">
                                <input type="submit" value="Excluir" class="waves-effect waves-light red btn">
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>
<?php
$imgProdutos = [
    ["001.jpg" => "Computador 1"],
    ["002.jpg" => "Computador 2"],
    ["003.jpg" => "Computador 3"],
    ["004.jpg" => "Computador 4"],
    ["005.jpg" => "Computador 5"],
    ["006.jpg" => "Computador 6"]
];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div class="section">
        <h5>Home</h5>
        <p>Página Inicial</p>
    </div>

    <?php
    $i = 3;
    $x = 5;
    foreach ($imgProdutos as $produto) {
        foreach ($produto as $codigo => $descricao) {
            if ($i % 3  == 0) {
    ?>
                <div class="row">
                <?php
            } ?>

                <div class="col s12 m6 l4">
                    <div class="card small">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="./imagens/produtos/<?= $codigo ?>" style="weight: 50px; heigth: 50px">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><?= $descricao; ?>
                                <i class="material-icons right">
                                <a class="waves-effect waves-light btn-small">Comprar</a>
                                </i>
                            </span>
                            <p><a href="#">Saiba mais</a></p>
                        </div>
                    </div>
                </div>

                <?php
                if ($i == $x) {
                    $x += 3;
                ?>
                </div>
    <?php
                }
                $i++;
            }
        }
    ?>
</body>

</html>
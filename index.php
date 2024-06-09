<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimensões de Azulejo</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="central">
        <h1>Calculadora do <br>combustivel</h1>
        <p id="info">Insira abaixo os valores para calcular o n° mínimo de litros <br>necessários para percorrer uma
            quantidade definida de voltas</p>
        <form method="get" action="index.php">
            <label for="">Comprimento</label>
            <!-- <textarea name="texto-teste" id=""></textarea> -->
            <input type="number" placeholder="Ex: 5,5m" class="square" name="compr" step="0.01" min="0" required>
            <label for="">Largura</label>
            <input type="number" placeholder="Ex: 3m" class="square" name="larg" step="0.01" min="0" required>
            <label for="">Altura</label>
            <input type="number" placeholder="Ex: 2,5m" class="square" name="alt" step="0.01" min="0" required>
            <p id="info2">Obs.: Uma caixa de azulejo corresponde a 1,5m^2</p>
            <a href="index.php">
                <input type="submit" value="Calcular" class="calcular">
            </a>
        </form>

        <?php
        $comprimento = $_GET["compr"] ?? 0;
        $largura = $_GET["larg"]  ?? 0;
        $altura = $_GET["alt"]  ?? 0;
        $area_parede_1 = ($comprimento) * $altura;
        $area_parede_2 = ($largura) * $altura;

        $areatotal = 2 * ($area_parede_1) + 2 * ($area_parede_2);
        echo "<div class='phpresponde'>A área total da cozinha será: $areatotal </div>";

        $caixas = ceil($areatotal / 1.5);
        echo "<div class='phpresponde'>A quantidade de caixas por metro^2 é: $caixas </div>";

        ?>
    </div>
</body>

</html>
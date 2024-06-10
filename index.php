<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimensões de Azulejo</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <img src="./img/Brennet-logo.png" alt="Logo">
    <div class="central">
        <h1>Calculadora de <br>combustivel</h1>
        <p id="info">Insira abaixo os valores para calcular o n° mínimo de litros <br>necessários para percorrer uma
            quantidade definida de voltas</p>

        <form method="get" action="index.php">
            <div class="elementos">

                <!-- Comprimento da Pista -->
                <label for="">Comprimento da Pista</label>
                <input type="number" placeholder="Ex: 3200m" class="square" name="compr" step="0.01" min="0" required>

                <!-- Total de Voltas -->

                <label for="">N° Total de Voltas:</label>
                <input type="number" placeholder="Ex: 10 voltas" class="square" name="voltas" step="0.01" min="0"
                    required>

                <!-- Reabastecimentos desejados -->

                <label for="">N° Reabastecimentos desejados:</label>
                <input type="number" placeholder="Ex: 2" class="square" name="reabastecimento" step="0.01" min="0"
                    required>

                <!-- Consumo de Combustível -->

                <label for="">Consumo de Combustível:</label>
                <input type="number" placeholder="Ex: 8 Km/L" class="square" name="combustivel" step="0.01" min="0"
                    required>

            </div>
            <!-- Botão -->

            <a href="index.php">
                <input type="submit" value="Calcular" class="calcular">
            </a>
        </form>

        <?php
        $comprimento = $_GET["compr"] ?? 1;
        $numvoltas = $_GET["voltas"]  ?? 1;
        $numreabastecimentos = $_GET["reabastecimento"]  ?? 1;
        $consumoCombustivel = $_GET["combustivel"]  ?? 1;

        $distanciaPercorrida = ($comprimento) * $numvoltas;
        $Trecho = $distanciaPercorrida / ($numreabastecimentos + 1);
        $conversao = $Trecho / 1000;
        $LitrosTotais = ceil($conversao / $consumoCombustivel);

        echo "<div class='phpresponde'><b>O Consumo Mínimo de combustível será de $LitrosTotais Km/L</b></div>";
        ?>
    </div>
</body>

</html>
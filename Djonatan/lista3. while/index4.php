<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Média Ponderada</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Cálculo da Média Ponderada</h2>
    <form method="post">
        <label for="nota1" style="color:rgb(188, 125, 217)">Digite a nota 1 (0 a 10):</label>
        <input type="number" step="0.1" name="nota1" id="nota1" min="0" max="10">
        <label for="peso1" style="color:rgb(188, 125, 217)">Peso da nota 1:</label>
        <input type="number" name="peso1" id="peso1" min="1">

        <br>

        <label for="nota2" style="color:rgb(188, 125, 217)">Digite a nota 2 (0 a 10):</label>
        <input type="number" step="0.1" name="nota2" id="nota2" min="0" max="10">
        <label for="peso2" style="color:rgb(188, 125, 217)">Peso da nota 2:</label>
        <input type="number" name="peso2" id="peso2" min="1">

        <br>

        <label for="nota3" style="color:rgb(188, 125, 217)">Digite a nota 3 (0 a 10):</label>
        <input type="number" step="0.1" name="nota3" id="nota3" min="0" max="10">
        <label for="peso3" style="color:rgb(188, 125, 217)">Peso da nota 3:</label>
        <input type="number" name="peso3" id="peso3" min="1">

        <br>

        <label for="nota4" style="color:rgb(188, 125, 217)">Digite a nota 4 (0 a 10):</label>
        <input type="number" step="0.1" name="nota4" id="nota4" min="0" max="10">
        <label for="peso4" style="color:rgb(188, 125, 217)">Peso da nota 4:</label>
        <input type="number" name="peso4" id="peso4" min="1">

        <br>

        <button type="submit">Calcular Média Ponderada</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $notas = [];
        $pesos = [];
        $somaNotasPonderadas = 0;
        $somaPesos = 0;
        $i = 1;

        while ($i <= 4) {
            $nota = isset($_POST["nota$i"]) ? $_POST["nota$i"] : -1;
            $peso = isset($_POST["peso$i"]) ? $_POST["peso$i"] : 0;

            if ($nota < 0) {
                break;
            }

            $notas[] = $nota;
            $pesos[] = $peso;

            $somaNotasPonderadas += $nota * $peso;
            $somaPesos += $peso;

            $i++;
        }

        if ($somaPesos > 0) {
            $mediaPonderada = $somaNotasPonderadas / $somaPesos;
            echo "<h3>A média ponderada é: " . number_format($mediaPonderada, 2) . "</h3>";
        } else {
            echo "<h3>Por favor, insira notas válidas para calcular a média ponderada.</h3>";
        }
    }
    ?>
</body>
</html>

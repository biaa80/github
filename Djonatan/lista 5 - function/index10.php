<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Juros Compostos</title>
</head>
<body>

<h2 style="color:rgb(188, 125, 217)">Calculadora de Juros Compostos</h2>

<form method="post">
    <label>Capital inicial (R$):</label>
    <input type="number" name="capital" step="0.01" required><br><br>

    <label>Taxa de juros ao mês (%):</label>
    <input type="number" name="taxa" step="0.01" required><br><br>

    <label>Número de meses:</label>
    <input type="number" name="tempo" required><br><br>

    <button type="submit" style="color:rgb(188, 125, 217)">Calcular</button>
</form>

<?php

function calcularJurosCompostos($capital, $taxa, $tempo) {
    $montante = $capital * pow((1 + ($taxa / 100)), $tempo);
    return $montante; 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $capital = floatval($_POST["capital"]);
    $taxa = floatval($_POST["taxa"]);
    $tempo = intval($_POST["tempo"]);

    $montanteFinal = calcularJurosCompostos($capital, $taxa, $tempo);
    echo "<h3>Montante final: R$ " . number_format($montanteFinal, 2, ',', '.') . "</h3>";
}
?>

</body>
</html>

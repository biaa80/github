<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do IMC</title>
</head>
<body>

<h2 style="color:rgb(188, 125, 217)">Calcule seu IMC</h2>

<form method="post">
    <label>Peso (kg):</label>
    <input type="number" name="peso" step="0.1" required><br><br>
    
    <label>Altura (m):</label>
    <input type="number" name="altura" step="0.01" required><br><br>

    <button type="submit" style="color:rgb(188, 125, 217)">Calcular IMC</button>
</form>

<?php

function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    
    if ($imc < 18.5) return ["imc" => $imc, "classificacao" => "Abaixo do peso"];
    elseif ($imc < 24.9) return ["imc" => $imc, "classificacao" => "Peso normal"];
    elseif ($imc < 29.9) return ["imc" => $imc, "classificacao" => "Sobrepeso"];
    else return ["imc" => $imc, "classificacao" => "Obesidade"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    
    $resultado = calcularIMC($peso, $altura); 
    $imc = number_format($resultado["imc"], 1); 
    $classificacao = $resultado["classificacao"];

    echo "<h3>IMC: $imc</h3>";
    echo "<h3>Classificação: $classificacao</h3>";
}
?>

</body>
</html>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura</title>
</head>
<body>

<h2 style="color:rgb(188, 125, 217)">Conversor de Celsius para Fahrenheit</h2>

<form method="post">
    <label>Digite a temperatura em Celsius:</label>
    <input type="number" name="celsius" step="0.1" required>
    <button type="submit" style="color:rgb(188, 125, 217)">Converter</button>
</form>

<?php
function Fahrenheit($celsius) {
    return ($celsius * 1.8) + 32;
}

// Verifica se o formulário foi enviado e se o campo não está vazio
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["celsius"]) && $_POST["celsius"] !== "") {
    $celsius = floatval($_POST["celsius"]); // Converte para número decimal
    $fahrenheit = number_format(Fahrenheit($celsius), 1); 
    echo "<h3>{$celsius}°C equivale a {$fahrenheit}°F.</h3>";
}
?>

</body>
</html>


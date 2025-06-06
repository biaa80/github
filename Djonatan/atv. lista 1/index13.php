<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
</head>
<body>
<h2>Conversão de temperatura</h2>
<form method="post">
        <label>Digite a temperatura em graus Célsius para a conversão:</label ><br>
        <br>
        <input type="number" name="tempe" required> <br>
        <br>
        <button type="submit">Verificar</button> <br>
        <br>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tempe = intval($_POST["tempe"]);
    
        $conta= (9 * $tempe + 160) / 5;

        echo "A temperatura em Fahrenheit é: " . $conta;
    }

    
?>
    
</body>
</html>
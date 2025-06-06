<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do círculo</title>
</head>
<body>
<h2>Cálculo da área do círculo</h2>
<form method="post">
        <label>Digite o raio do círculo:</label ><br>
        <br>
        <input type="number" name="raio" required> <br>
        <br>
        <button type="submit">Verificar</button> <br>
        <br>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $raio = intval($_POST["raio"]);
    
        $conta= 3.14 * $raio * $raio;

        echo "A área do círculo é: " . $conta;
    }

    
?>
</body>
</html>
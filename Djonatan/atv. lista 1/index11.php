<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotação</title>
</head>
<body>
<h2>Cotação</h2>
<form method="post">
        <label>Digite quanto está valendo o dólar e quntos reais você tem respectivamente:</label ><br>
        <br>
        <input type="number" name="dolar" required> <br>
        <br>
        <input type="number" name="real" required>
        <br>
        <button type="submit">Verificar</button> <br>
        <br>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dolar = intval($_POST["dolar"]);
        $real = intval($_POST["real"]);
    
        $conta= $real / $dolar;

        echo "Seu dinheiro vale: " . $conta . "dólares";
    }

    
?>
</body>
</html>
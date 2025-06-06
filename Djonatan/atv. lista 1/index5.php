<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadrado 2.0</title>
</head>
<body>

<h2>Verificador de Quadrado 2.0</h2>
    <form method="post">
        <label>Digite três números inteiros:</label><br>
        <input type="number" name="numero1" required><br>
        <br>
        <input type="number" name="numero2" required><br>
        <br>
        <input type="number" name="numero3" required><br>
        <br>
        <button type="submit">Verificar</button> <br>
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = intval($_POST["numero1"]);
        $numero2 = intval($_POST["numero2"]);
        $numero3 = intval($_POST["numero3"]);

        $conta= $numero1 + $numero2 + $numero3;
        $raiz= $conta * $conta;

        echo "<p>O quadrado da soma dos números inseridos é: " . $raiz;
    }
?>
</body>
</html>
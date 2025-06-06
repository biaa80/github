<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos</title>
</head>
<body>
<h2>Cálculos</h2>
<form method="post">
        <label>Digite três números inteiros:</label ><br>
        <br>
        <input type="number" name="numero1" required> <br>
        <br>
        <input type="number" name="numero2" required> <br>
        <br>
        <input type="number" name="numero3" required> <br>
        <br>
        <input type="number" name="numero4" required> <br>
        <br>
        <button type="submit">Verificar</button> <br>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = intval($_POST["numero1"]);
        $numero2 = intval($_POST["numero2"]);
        $numero3 = intval($_POST["numero3"]);
        $numero4 = intval($_POST["numero4"]);
    
        $conta1=  $numero1 * $numero3;
        $conta2= $numero2 + $numero4;

        echo "A multiplicação do primeiro pelo terceiro é: " . $conta1 . "<br>";
        echo "A soma do segundo pelo quarto é: " . $conta2;
    }
?>
    
</body>
</html>
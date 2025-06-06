<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume</title>
</head>
<body>
<h2>Cálculo do volume cúbico da lata de óleo</h2>
<form method="post">
        <label>Digite a altura e o raio da lata:</label ><br>
        <br>
        <input type="number" name="altura" required> <br>
        <br>
        <input type="number" name="raio" required> <br>
        <br>
        <button type="submit">Verificar</button> <br>
        <br>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $altura = intval($_POST["altura"]);
        $raio = intval($_POST["raio"]);
    
        $conta= 3.14 * $raio * $raio * $altura;

        echo "O volume cúbico da lata é: " . $conta;
    }

    
?>
</body>
</html>
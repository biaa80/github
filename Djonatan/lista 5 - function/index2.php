<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Fatorial</title>
</head>
<body>

<h2 style="color:rgb(188, 125, 217)">Digite um número para verificar seu fatorial</h2>

<form method="post">
    <input type="number" id="numero" name="numero" required>
    <br><br>
    <button type="submit" style="color: rgb(188, 125, 217)">Calcular</button>
</form>

<?php

function fatorial($n) {
    if ($n < 0) {
        return "Número inválido";
    }
    if ($n <= 1) {
        return 1;
    }
    return $n * fatorial($n - 1);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]); 
    echo "<h3>O fatorial de $numero é " . fatorial($numero) . "</h3>";
}
?>

</body>
</html>

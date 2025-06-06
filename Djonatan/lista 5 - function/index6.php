<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos Dígitos</title>
</head>
<body>

<h2 style="color:rgb(188, 125, 217)">Digite um número para somar seus dígitos</h2>

<form method="post">
    <input type="number" name="numero" required>
    <button type="submit" style="color:rgb(188, 125, 217)">Calcular</button>
</form>

<?php

function somaDigitos($numero) {
    $digitos = str_split($numero); 
    return array_sum($digitos); 
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
    $numero = abs(intval($_POST["numero"])); 
    $soma = somaDigitos($numero);

  
    $detalhes = implode(" + ", str_split($numero));
    echo "<h3>$detalhes = $soma</h3>";
}
?>

</body>
</html>

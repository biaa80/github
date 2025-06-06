<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior e Menor Valor</title>
</head>
<body>

<h2 style="color:rgb(188, 125, 217)">Digite uma sequência de números separados por vírgula</h2>

<form method="post">
    <input type="text" name="numeros" placeholder="Ex: 10, 5, 20, 8" required>
    <button type="submit" style="color:rgb(188, 125, 217)">Verificar</button>
</form>

<?php

function encontrarMaiorMenor($numeros) {
    $lista = explode(",", str_replace(" ", "", $numeros)); // Remove espaços e divide os números por vírgula
    $lista = array_map("floatval", $lista); // Converte para números
    
    $maior = max($lista);
    $menor = min($lista);

    return ["maior" => $maior, "menor" => $menor];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["numeros"])) {
    $numeros = $_POST["numeros"];
    $resultado = encontrarMaiorMenor($numeros);
    
    echo "<h3>O maior número é: {$resultado['maior']}</h3>";
    echo "<h3>O menor número é: {$resultado['menor']}</h3>";
}
?>

</body>
</html>

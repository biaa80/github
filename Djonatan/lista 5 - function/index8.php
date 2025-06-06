<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Palavras</title>
</head>
<body>

<h2 style="color:rgb(188, 125, 217)">Digite uma frase para contar as palavras</h2>

<form method="post">
    <input type="text" name="frase" required><br><br>
    <button type="submit" style="color:rgb(188, 125, 217)">Contar Palavras</button>
</form>

<?php

function contarPalavras($frase) {
    // Usa preg_split para separar as palavras por espaço e conta o número de palavras
    $palavras = preg_split('/\s+/', trim($frase));
    return count($palavras); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["frase"])) {
    $frase = $_POST["frase"];
    $quantidadePalavras = contarPalavras($frase);

    echo "<h3>Quantidade de palavras: $quantidadePalavras</h3>";
}
?>

</body>
</html>

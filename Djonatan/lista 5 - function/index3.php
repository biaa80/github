<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de Vogais</title>
</head>
<body>

<h2 style="color:rgb(188, 125, 217)">Digite uma palavra para contar as vogais</h2>

<form method="post">
    <input type="text" name="palavra" required>
    <button type="submit" style="color:rgb(188, 125, 217)">Contar Vogais</button>
</form>

<?php
function contarVogais($palavra) {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;
    $palavra = strtolower($palavra); // Converte para minúsculas

    // Percorre cada letra da palavra
    for ($i = 0; $i < strlen($palavra); $i++) {
        if (in_array($palavra[$i], $vogais)) {
            $contador++;
        }
    }
    return $contador;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palavra = $_POST["palavra"];
    echo "<h3>A palavra '$palavra' tem " . contarVogais($palavra) . " vogais.</h3>";
}
?>

</body>
</html>

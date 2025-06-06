<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulação de Tabuada</title>
</head>
<body>

<h2 style="color:rgb(188, 125, 217)">Digite um número para ver sua tabuada de 1 a 10</h2>

<form method="post">
    <input type="number" name="numero" required><br><br>
    <button type="submit" style="color:rgb(188, 125, 217)">Ver Tabuada</button>
</form>

<?php

function tabuada($numero) {
    $resultados = [];
    for ($i = 1; $i <= 10; $i++) {
        $resultados[] = "$numero x $i = " . ($numero * $i); 
    }
    return $resultados;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
    $numero = $_POST["numero"];
    $tabuadaResult = tabuada($numero);

    echo "<h3>Tabuada do $numero:</h3>";
    echo "<ul>";
    foreach ($tabuadaResult as $resultado) {
        echo "<li>$resultado</li>";
    }
    echo "</ul>";
}
?>

</body>
</html>

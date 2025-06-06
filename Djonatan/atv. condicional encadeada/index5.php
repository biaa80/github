<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa Maior 2.0</title>
</head>
<body>

<h2>Programa Maior 2.0</h2>

<form method="post">
    <label>Digite o primeiro número:</label>
    <input type="number" name="num1" required><br><br>

    <label>Digite o segundo número:</label>
    <input type="number" name="num2" required><br><br>

    <label>Digite o terceiro número:</label>
    <input type="number" name="num3" required><br><br>

    <button type="submit">Verificar Maior</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = floatval($_POST["num1"]);
    $num2 = floatval($_POST["num2"]);
    $num3 = floatval($_POST["num3"]);

    $maior = max($num1, $num2, $num3);

    echo "<p>O maior número é: $maior</p>";
}
?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body>
<h2>Calculadora de idade em dias</h2>
<form method="post">
        <label>Digite sua idade em anos, meses e dias:</label ><br>
        <br>
        <label>Anos:</label ><br>
        <input type="number" name="anos" required> <br>
        <br>
        <label>Meses:</label ><br>
        <input type="number" name="meses" required> <br>
        <br>
        <label>Dias:</label ><br>
        <input type="number" name="dias" required> <br>
        <br>
        <button type="submit">Verificar</button> <br>
        <br>
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $anos = intval($_POST['anos']);
        $meses = intval($_POST['meses']);
        $dias = intval($_POST['dias']);

        $total_dias = ($anos * 365) + ($meses * 30) + $dias;

        echo "Sua idade em dias é: $total_dias";
    }
?>
</body>
</html>
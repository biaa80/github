<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestação</title>
</head>
<body>
<h2>Cáculo de prestação</h2>
    <form method="post">
        <label>Digite os valores para o cálculo da nova prestação:</label ><br>
        <br>
        <label>Valor do boleto:</label ><br>
        <input type="number" name="valor" required> <br>
        <br>
        <label>Percentual de juros cobrado:</label ><br>
        <input type="number" name="juros" required> <br>
        <br>
        <label>Dias em atraso:</label ><br>
        <input type="number" name="dias" required> <br>
        <br>
        <button type="submit">Verificar</button> <br>
        <br>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor= intval($_POST['valor']);
        $juros= intval($_POST['juros']);
        $dias= intval($_POST['dias']);

        $prestacao= $valor + ($valor * ($juros / 100)) * $dias;

        echo "O novo valor a ser pago é: $prestacao";
    }
?>

</body>
</html>
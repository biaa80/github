<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>
<body>
<h2>Cáculo de desconto</h2>
<form method="post">
        <label>Digite o valor do produto para aplicar o desconto de 30%:</label ><br>
        <br>
        <input type="number" name="valor" required> <br>
        <br>
        <button type="submit">Verificar</button> <br>
        <br>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = intval($_POST["valor"]);
    
        $cupom= $valor * 0.30;
        $desconto= $valor - $cupom;

        echo "O valor do produto com o cupom aplicado é: " . $desconto;
    }

    
?>
</body>
</html>
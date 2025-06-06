<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abastecimento</title>
</head>
<body>
<h2>Abastecimento</h2>
<form method="post">
        <label>Digite quanto é o preço do litro do combustível e quntos reais<br>deseja abastecer respectivamente:</label ><br>
        <br>
        <input type="number" name="preco" required> <br>
        <br>
        <input type="number" name="reais" required> <br>
        <br>
        <button type="submit">Verificar</button> <br>
        <br>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preco = intval($_POST["preco"]);
        $reais = intval($_POST["reais"]);
    
        $conta= $reais / $preco;

        echo "A quantidade de litros que serão comprados é: " . $conta;
    }

    
?>
</body>
</html>
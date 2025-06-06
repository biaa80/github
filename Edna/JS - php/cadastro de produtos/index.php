<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
    <script src="script.js"></script>
</head>
<body>
<h1>Formulário de cadastro de produtos</h1>

<form action="" onsubmit="return validar()" method="post">
    <label for="nome">Nome do produto:</label>
    <input type="text" id="nome" name="nome"><br><br>

    <label for="quantidade">Quantidade:</label>
    <input type="number" id="quantidade" name="quantidade"><br><br>

    <label for="preco">Preço:</label>
    <input type="number" id="preco" name="preco"><br><br>

    <input type="submit" value="Cadastrar">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $quantidade= $_POST['quantidade'];
    $preco= $_POST['preco'];
    $total= $quantidade * $preco;
    echo "<h2>Dados cadastrados</h2>";
    echo "<p>Nome do produto: " . $_POST['nome'] . "</p>";
    echo "<p>Quantidade: " . $_POST['quantidade'] . "</p>";
    echo "<p>Preço:" . $_POST['preco'] . "</p>";
    echo "<p>Total de produtos:  " . $total . "</p>";
}
?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP com JS</title>
    <script src="script.js"></script>
</head>
<body>
    <h1>Formulário de cadastro</h1>

    <form action="" onsubmit="return validar()" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="cargo">Cargo:</label>
        <input type="text" id="cargo" name="cargo"><br><br>

        <label for="salario">Salário:</label>
        <input type="text" id="salario" name="salario"><br><br>

        <input type="submit" value="Cadastrar">
    </form>
    
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "<h2>Dados cadastrados</h2>";
        echo "<p>Nome: " . $_POST['nome'] . "</p>";
        echo "<p>Cargo: " . $_POST['cargo'] . "</p>";
        echo "<p>Salário:" . $_POST['salario'] . "</p>";
}
    ?>
</body>
</html>
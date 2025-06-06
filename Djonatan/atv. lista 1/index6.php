<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz</title>
</head>
<body>
<h2>Verificador de Raiz</h2>
    <form method="post">
        <label>Digite um número inteiro:</label>
        <input type="number" name="numero" required>
        <button type="submit">Verificar</button> <br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        $resultado= sqrt ($numero);

        echo "<p>A raiz quadrada do número inserido é: " . $resultado;
    }
?>
</body>
</html>
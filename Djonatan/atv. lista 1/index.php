<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>
<body>
 
    <h2>Verificador de Par ou Ímpar</h2>
    <form method="post">
        <label>Digite um número inteiro:</label>
        <input type="number" name="numero" required>
        <button type="submit">Verificar</button>
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
 
        if ($numero % 2 == 0) {
            echo "<p>O número <strong>$numero</strong> é <strong>Par</strong>.</p>";
        } else {
            echo "<p>O número <strong>$numero</strong> é <strong>Ímpar</strong>.</p>";
        }
    }
    ?>
 
</body>
</html>
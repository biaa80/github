<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números pares e ímpares</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Números Pares e Ímpares</h2>
    <form method="post">
        <label for="numero" style="color:rgb(188, 125, 217)">Digite dez números inteiros:</label><br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["numero"])) {
        $numeros = array_map('intval', $_POST["numero"]); // Converte para inteiros e remove valores vazios

        foreach ($numeros as $num) {
            if ($num % 2 == 0) {
                echo "<p>O número <strong>$num</strong> é <strong>Par</strong>.</p>";
            } else {
                echo "<p>O número <strong>$num</strong> é <strong>Ímpar</strong>.</p>";
            }
        }
    }
    ?>
</body>
</html>


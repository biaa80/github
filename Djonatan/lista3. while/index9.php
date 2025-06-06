<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Collatz</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Sequência de Collatz</h2>

    <form method="post">
        <label for="numero" style="color:rgb(188, 125, 217)">Digite um número inteiro positivo:</label>
        <input type="number" name="numero" id="numero" required min="1"><br><br>

        <button type="submit">Gerar Sequência</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        echo "<h3>Sequência de Collatz para $numero:</h3>";
        echo "$numero ";

        do {
            if ($numero % 2 == 0) {
                $numero /= 2;  // Se for par, divide por 2
            } else {
                $numero = ($numero * 3) + 1;  // Se for ímpar, multiplica por 3 e soma 1
            }
            echo "→ $numero ";
        } while ($numero > 1);
    }
    ?>

</body>
</html>

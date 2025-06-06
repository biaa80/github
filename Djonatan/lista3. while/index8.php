<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Palíndromo</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Verificador de Palíndromo</h2>

    <form method="post">
        <label for="numero" style="color:rgb(188, 125, 217)">Digite um número inteiro:</label>
        <input type="number" name="numero" id="numero" required><br><br>

        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $numero_original = $numero;
        $numero_invertido = 0;

        do {
            $digito = $numero % 10;  
            $numero_invertido = ($numero_invertido * 10) + $digito;
            $numero = (int)($numero / 10);
        } while ($numero > 0);

        if ($numero_original == $numero_invertido) {
            echo "<h3>O número $numero_original é um palíndromo!</h3>";
        } else {
            echo "<h3>O número $numero_original não é um palíndromo!</h3>";
        }
    }
    ?>

</body>
</html>

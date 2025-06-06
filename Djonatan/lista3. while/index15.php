<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aproximação de Pi</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Cálculo de Aproximação de Pi</h2>
    
    <form method="post">
        <label for="iteracoes" style="color:rgb(188, 125, 217)">Digite o número de iterações:</label>
        <input type="number" name="iteracoes" id="iteracoes" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $iteracoes = $_POST["iteracoes"];
        $pi_aproximado = 0;

        for ($i = 0; $i < $iteracoes; $i++) {
            $pi_aproximado += (pow(-1, $i) / (2 * $i + 1));
        }

        $pi_aproximado *= 4;

        echo "<h3>Com $iteracoes iterações, a aproximação de π é: $pi_aproximado</h3>";
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Saque</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Calculadora de Saque</h2>

    <form method="post">
        <label for="valor_saque" style="color:rgb(188, 125, 217)">Digite o valor do saque:</label>
        <input type="number" name="valor_saque" id="valor_saque" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor_saque = $_POST["valor_saque"];

        $cedulas = [100, 50, 20, 10, 5, 2];
        $quantidade_cedulas = [];

        foreach ($cedulas as $cedula) {
            $quantidade_cedulas[$cedula] = 0;
        }

        do {
            foreach ($cedulas as $cedula) {
                while ($valor_saque >= $cedula) {
                    $valor_saque -= $cedula;
                    $quantidade_cedulas[$cedula]++;
                }
            }
        } while ($valor_saque > 0);

        if ($valor_saque == 0) {
            echo "<h3>Para um saque de R$ " . $_POST["valor_saque"] . ", serão necessárias:</h3>";
            foreach ($quantidade_cedulas as $cedula => $quantidade) {
                if ($quantidade > 0) {
                    echo "$quantidade cédulas de R$ $cedula<br>";
                }
            }
        } else {
            echo "<h3>Valor de saque inválido!</h3>";
        }
    }
    ?>

</body>
</html>


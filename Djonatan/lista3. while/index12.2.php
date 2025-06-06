<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos no Intervalo</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Números Primos no Intervalo</h2>

    <form method="post">
        <label for="num1" style="color:rgb(188, 125, 217)">Digite o primeiro número:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2" style="color:rgb(188, 125, 217)">Digite o segundo número:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <button type="submit">Exibir Primos</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        echo "<h3>Números primos entre $num1 e $num2:</h3>";

        for ($i = $num1; $i <= $num2; $i++) {
            if ($i < 2) {
                continue;
            }
            $primo = true;

            for ($j = 2; $j * $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $primo = false;
                    break;
                }
            }

            if ($primo) {
                echo "$i; ";
            }
        }
    } 
    ?>
</body>
</html>

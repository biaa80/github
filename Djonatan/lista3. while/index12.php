<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Números Primos no Intervalo</h2>

    <form method="post">
        <label>Digite dois números:</label><br>
        <input type="number" name="num1" required>
        <input type="number" name="num2" required>
        <button type="submit">Exibir Primos</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = min($_POST["num1"], $_POST["num2"]);
        $num2 = max($_POST["num1"], $_POST["num2"]);

        echo "<h3>Primos entre $num1 e $num2:</h3>";

        for ($i = $num1; $i <= $num2; $i++) {
            $primo = ($i > 1);
            for ($j = 2; $j * $j <= $i && $primo; $j++) {
                if ($i % $j == 0) $primo = false;
            }
            if ($primo) echo "$i; ";
        }
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Números Amigos</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Verificação de Números Amigos</h2>

    <form method="post">
        <label for="num1" style="color:rgb(188, 125, 217)">Digite o primeiro número:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2" style="color:rgb(188, 125, 217)">Digite o segundo número:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        function soma_divisores($numero) {
            $soma = 0;
            for ($i = 1; $i < $numero; $i++) {
                if ($numero % $i == 0) {
                    $soma += $i;
                }
            }
            return $soma;
        }

        $soma_num1 = soma_divisores($num1);
        $soma_num2 = soma_divisores($num2);

        if ($soma_num1 == $num2 && $soma_num2 == $num1) {
            echo "<h3>$num1 e $num2 são números amigos! </h3>";
        } else {
            echo "<h3>$num1 e $num2 não são números amigos. </h3>";
        }
    }
    ?>
</body>
</html>

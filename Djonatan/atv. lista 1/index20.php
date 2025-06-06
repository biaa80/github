<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milionário</title>
</head>
<body>
<h2>Cálculo para se tornar milionário:</h2>
    <form method="post">
        <label>Digite os valores para o cálculo:</label><br><br>
        <label>Valor do salário:</label><br>
        <input type="number" name="salario" required> <br><br>
        <label>Valor das despesas mensais:</label><br>
        <input type="number" name="despesas" required> <br><br>
        <button type="submit">Calcular</button> <br><br>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salario = floatval($_POST['salario']);
        $despesas = floatval($_POST['despesas']);

        $sobra = $salario - $despesas;
        $valor_necessario = 1000000;

        if ($sobra > 0) {
            $meses_necessarios = $valor_necessario / $sobra;
            $anos_necessarios = $meses_necessarios / 12;

            echo "Você precisa de aproximadamente " . round($anos_necessarios, 2) . 
                 " anos para se tornar milionário, poupando R$" . 
                 number_format($sobra, 2, ',', '.') . " por mês.";
        } else {
            echo "Seu salário não é suficiente para cobrir as despesas mensais. Ajuste seus valores.";
        }
    }
?>
</body>
</html>
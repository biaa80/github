<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Conversor de Reais para Dólares</h2>

    <form method="post">
        <label for="valor_reais" style="color:rgb(188, 125, 217)">Digite um valor em reais (ou 0 para sair):</label>
        <input type="number" name="valor_reais" id="valor_reais" step="0.01" required><br><br>

        <button type="submit">Converter</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $taxa_conversao = 5; 
        $valor_reais = $_POST["valor_reais"];

        do {
            if ($valor_reais == 0) {
                echo "<h3 style='color:blue;'>Conversão finalizada.</h3>";
                break; // Encerra o loop se o usuário digitar 0
            }

            $valor_dolares = $valor_reais / $taxa_conversao;
            echo "<h3>$valor_reais BRL equivale a " . number_format($valor_dolares, 2) . " USD.</h3>";
            break; // Evita loop infinito
        } while ($valor_reais != 0);
    }
    ?>

</body>
</html>

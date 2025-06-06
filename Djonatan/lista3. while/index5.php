<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Dígitos</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Soma de Dígitos de um Número</h2>
    <form method="post">
        <label for="numero" style="color:rgb(188, 125, 217)">Digite um número inteiro:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
        $numero = $_POST["numero"];
        $soma = 0;

        // Convertendo o número para string para acessar seus dígitos
        $numeroAbs = abs($numero); // Para garantir que o número seja positivo

        // Loop para calcular a soma dos dígitos
        while ($numeroAbs > 0) {
            $digito = $numeroAbs % 10; // Extrai o último dígito
            $soma += $digito; // Adiciona o dígito à soma
            $numeroAbs = (int)($numeroAbs / 10); // Remove o último dígito
        }

        echo "<h3>A soma dos dígitos de $numero é: $soma</h3>";
    }
    ?>
</body>
</html>

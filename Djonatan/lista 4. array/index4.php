<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média de notas</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Média de notas</h2>
    <form method="post">
        <label for="notas" style="color:rgb(188, 125, 217)">Digite cinco notas:</label><br><br>
        <input type="number" name="notas[]" id="notas" required>
        <br><br>
        <input type="number" name="notas[]" id="notas" required>
        <br><br>
        <input type="number" name="notas[]" id="notas" required>
        <br><br>
        <input type="number" name="notas[]" id="notas" required>
        <br><br>
        <input type="number" name="notas[]" id="notas" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["notas"])) {
        $notas = array_map('floatval', $_POST["notas"]); // Converte as notas para números decimais
        $soma = array_sum($notas); // Soma todas as notas
        $quantidade = count($notas); // Conta quantas notas foram inseridas
        
        if ($quantidade > 0) {
            $media = $soma / $quantidade;
            echo "<h3>A média das notas é: " . number_format($media, 2, ',') . "</h3>";

            if ($media >= 7) {
                echo "<h3 style='color:green;'>Aluno Aprovado!</h3>";
            } else {
                echo "<h3 style='color:red;'>Aluno Reprovado!</h3>";
            }
        }
    }
    ?>
</body>
</html>


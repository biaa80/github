<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação</title>
</head>
<body>
<h2>Recuperação</h2>
<form method="post">
    <label>Digite as três notas do aluno:</label><br><br>
    <label>Nota 1</label>
    <input type="number" name="nota1" required><br>
    <br>
    <label>Nota 2</label><br>
    <input type="number" name="nota2" required><br>
    <br>
    <label>Nota 3:</label><br>
    <input type="number" name="nota3" required><br>
    <br>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota1 = floatval($_POST["nota1"]);
    $nota2 = floatval($_POST["nota2"]);
    $nota3 = floatval($_POST["nota3"]);

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media >= 7.0) {
        echo "<p>APROVADO! Média: " . round($media, 2) . "</p>";
    } else {
        echo "<p>RECUPERAÇÃO! Média: " . round($media, 2) . "</p>";

        echo '<form method="post">
                <input type="hidden" name="nota1" value="' . $nota1 . '">
                <input type="hidden" name="nota2" value="' . $nota2 . '">
                <input type="hidden" name="nota3" value="' . $nota3 . '">
                <label>Nota da Recuperação:</label>
                <input type="number" name="nota_recuperacao" step="0.1" required><br><br>
                <button type="submit">Verificar Recuperação</button>
              </form>';
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nota_recuperacao"])) {
    $nota_recuperacao = floatval($_POST["nota_recuperacao"]);

    $media_final = ($media + $nota_recuperacao) / 2;

    if ($media_final >= 5.0) {
        echo "<p>APROVADO APÓS A RECUPERAÇÃO! Média final: " . round($media_final, 2) . "</p>";
    } else {
        echo "<p>REPROVADO! Média final: " . round($media_final, 2) . "</p>";
    }
}
?>



</body>
</html>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Pontuação</title>
</head>
<body>

<h2>Programa de Classificação</h2>

<form method="post">
    <label>Digite sua pontuação (0 a 100):</label><br><br>
    <input type="number" name="pontuacao" required><br><br>
    <button type="submit">Classificar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $pontuacao = intval($_POST["pontuacao"]);

    if ($pontuacao >= 0 && $pontuacao <= 30) {
        echo "<p>Classificação: REGULAR</p>";
    } elseif ($pontuacao >= 31 && $pontuacao <= 60) {
        echo "<p>Classificação: BOM</p>";
    } elseif ($pontuacao >= 61 && $pontuacao <= 90) {
        echo "<p>Classificação: MUITO BOM</p>";
    } elseif ($pontuacao >= 91 && $pontuacao <= 100) {
        echo "<p>Classificação: ÓTIMO</p>";
    } else {
        echo "<p>PONTUAÇÃO INVÁLIDA</p>";
    }
}
?>

</body>
</html>

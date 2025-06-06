<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo, negativo e nulo</title>
</head>
<body>
<h2>Verificador de positivo, negativo e nulo</h2>
    <form method="post">
        <label>Digite um número inteiro:</label>
        <input type="number" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
 
        if ($numero > 0) {
            echo "<p>O número <strong>$numero</strong> é <strong>Positivo</strong>.</p>";
        } elseif($numero < 0)
            echo "<p>O número <strong>$numero</strong> é <strong>Negativo</strong>.</p>";
        
        else {
            echo "<p>O número <strong>$numero</strong> é <strong>Nulo</strong>.</p>";
        }
    }
    ?>
    
</body>
</html>
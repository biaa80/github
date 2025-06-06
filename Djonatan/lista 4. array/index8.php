<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de Palavras</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Contagem de Palavras em uma Frase</h2>
    
    <form method="post">
        <label style="color:rgb(188, 125, 217)">Digite uma frase:</label><br><br>
        <input type="text" name="frase" required><br><br>
        <button type="submit">Contar Palavras</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["frase"])) {
        $frase = $_POST["frase"];
        
        $palavras = explode(" ", $frase);
        $contador = 0;

        echo "<h3>Palavras na frase:</h3>";
        echo "<ul>";
        foreach ($palavras as $palavra) {
            echo "<li>$palavra</li>";
            $contador++;
        }
        echo "</ul>";

        echo "<h3>Total de palavras: $contador</h3>";
    }
    ?>
</body>
</html>

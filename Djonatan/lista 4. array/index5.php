<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição de números</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Exibição de números</h2>
    
    <form method="post">
        <label style="color:rgb(188, 125, 217)">Digite cinco números para a lista:</label><br><br>
        
        <input type="number" name="numero[]" required><br><br>
        <input type="number" name="numero[]" required><br><br>
        <input type="number" name="numero[]" required><br><br>
        <input type="number" name="numero[]" required><br><br>
        <input type="number" name="numero[]" required><br><br>

        <button type="submit">Confirmar</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["numero"])) {
            $numeros = array_map('intval', $_POST["numero"]);
            
            echo "<h3>Lista de Números na Ordem Inserida:</h3>";
            echo "<ul>";
            foreach ($numeros as $num) {
                echo "<li>$num</li>";
            }
            echo "</ul>";

            sort($numeros);
            echo "<h3>Lista de Números em Ordem Crescente:</h3>";
            echo "<ul>";
            foreach ($numeros as $num) {
                echo "<li>$num</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Nenhum número foi cadastrado</p>";
        }
    }
    ?>
</body>
</html>


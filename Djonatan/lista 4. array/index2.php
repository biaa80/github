<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de números</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Soma de números</h2>
    <form method="post">
        <label for="numero" style="color:rgb(188, 125, 217)">Digite cinco números inteiros:</label><br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <input type="number" name="numero[]" id="numero" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["numero"])) {
        $numero= array_filter($_POST["numero"]);

        $soma= 0;
        foreach ($numero as $num) {
            $soma += $num;
        }

        echo "<h3>A soma dos números é: $soma</h3>";
} 

?>
</body>
</html>
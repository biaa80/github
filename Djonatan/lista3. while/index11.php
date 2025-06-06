<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirâmide Numérica</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Pirâmide Numérica</h2>

    <form method="post">
        <label for="numero" style="color:rgb(188, 125, 217)">Digite um número inteiro positivo:</label>
        <input type="number" name="numero" id="numero" required min="1"><br><br>

        <button type="submit">Gerar Pirâmide</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        echo "<h3> Pirâmide Numérica até $numero: </h3>";

        for ($i = 1; $i <= $numero; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j;
                if ($j < $i) {
                    echo "_"; 
                }
            }
            echo "<br>"; 
        }
    }
    ?>

</body>
</html>

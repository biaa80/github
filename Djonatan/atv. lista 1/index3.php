<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negativos</title>
</head>
<body>
<h2>Verificador de Negativos</h2>
    <form method="post">
        <label>Digite cinco números inteiros:</label><br>
        <br>
        <input type="number" name="numero1" required><br>
        <br>
        <input type="number" name="numero2" required><br>
        <br>
        <input type="number" name="numero3" required><br>
        <br>
        <input type="number" name="numero4" required><br>
        <br>
        <input type="number" name="numero5" required><br>
        <br>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = intval($_POST["numero1"]);
        $numero2 = intval($_POST["numero2"]);
        $numero3 = intval($_POST["numero3"]);
        $numero4 = intval($_POST["numero4"]);
        $numero5 = intval($_POST["numero5"]);

        $negativos = 0; 
    

    if($numero1 < 0){
        $negativos++;
    }

    if($numero2 < 0){
        $negativos++;
    }

    if($numero3 < 0){
        $negativos++;
    }

    if($numero4 < 0){
        $negativos++;
    }

    if($numero5 < 0){
        $negativos++;
    }

    echo "<p>Quantidade de números negativos: " . "<strong>$negativos</strong>";
    }
    ?>
    
</body>
</html>
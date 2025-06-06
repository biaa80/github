<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potência</title>
</head>
<body>
<h2>Potência</h2>
<form method="post">
        <label>Digite dois números inteiros:</label ><br>
        <br>
        <input type="number" name="numero1" required> <br>
        <br>
        <input type="number" name="numero2" required>
        <br>
        <button type="submit">Verificar</button> <br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = intval($_POST["numero1"]);
        $numero2 = intval($_POST["numero2"]);
        $resultado= pow ($numero1, $numero2);

        echo "<p>A potência do primeiro número elevado ao segundo é: " . $resultado;
    }
?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior</title>
</head>
<body>
<h2>Maior</h2>
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
    

    if($numero1 > $numero2){
        echo "<p>O primeiro número é maior que o segundo";
    }else{
        echo "<p>O primeiro número é menor que o segundo";
    }
}
?>


</body>
</html>
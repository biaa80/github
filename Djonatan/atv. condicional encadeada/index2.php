<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conjunto</title>
</head>
<body>
<h2>Verifica Conjunto</h2>
<form method="post">
    <label>Digite um número entre 5 e 15:</label><br><br>
    <input type="number" name="numero" required><br><br>
    <button type="submit">Verificar</button>
</form>

<?php    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]); 
    
    if ($numero >= 5 && $numero <= 15) {
        echo "<p>Este número pertence ao conjunto.</p>";
    } else {
        echo "<p>Este número não pertence ao conjunto.</p>";
    }
}
?>
</body>
</html>
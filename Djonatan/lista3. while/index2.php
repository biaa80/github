<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de tabuada</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Digite um número</h2>
 
    <form action="" method="post">
    <input type="number" id="numero" name="numero" required><br>
    <br>
    <button type="submit" style="color: rgb(188, 125, 217)">Calcular</button>
 
    </form>
 
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
        $numero = $_POST["numero"];
        echo "<h2>Tabuada do $numero:</h2>";
       $i = 1;
 
        while ($i <= 12) {
            $conta = $numero * $i;
            echo "<li>$numero x $i = $conta</li>";
            $i++;
    }

 
    echo "</ul>";
}
?>
   
 </body>
</html>
 
</body>
</html>
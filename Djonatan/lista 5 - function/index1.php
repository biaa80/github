<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número primo</title>
</head>
<body>
<h2 style="color:rgb(188, 125, 217)">Digite um número para verificar se ele é primo</h2>
<form method="post">
     <input type="number" id="numero" name="numero" required><br>
    <br>
    <button type="submit" style="color: rgb(188, 125, 217)">Calcular</button>

</form>

<?php

function primo($numero){
    if($numero <= 1){
        return false;
    }
    for($i = 2; sqrt ($numero); $i++){
        if($numero % $i == 0){
            return false;
        }
    }
    return true;

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = (int)$_POST["numero"];
    
    if(primo($numero)){
        echo "<p>O número $numero é primo!<p>" 
    }else{
        echo "<p>O número $numero não primo!<p>"
    }
}




?>
</body>
</html>
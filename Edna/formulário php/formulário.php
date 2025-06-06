<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h2>Verificação de idade</h2>
    <form method="GET">
    <p><label for="idade">Idade</label></p>
    <p><input type="number" name= "idade" required></p>
    <p><input type="submit"></p>

    </form>

<?php
    if(isset($_GET('idade'))){
        $idade= intval($_GET['idade']); 
    
        echo "<h2>Resultado: </h2>";

        if($idade < 18){
            echo "<p>Você é menor de idade </p>";
        }
        elseif($idade >= 18 && $idade <= 60){
            echo "<p>Você é adulto</p>";
        }
        else{
            echo "<p>Você é idoso</p>;"
        }
    
    }


?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de tabuada</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Digite cinco idade para calcular a média</h2>
 
    <form method="post">
    <input type="number" name="idade[]" placeholder= "Digite a 1ª idade"><br>
    <br>
    <input type="number" name="idade[]" placeholder= "Digite a 2ª idade"><br>
    <br>
    <input type="number" name="idade[]" placeholder= "Digite a 3ª idade"><br>
    <br>
    <input type="number" name="idade[]" placeholder= "Digite a 4ª idade"><br>
    <br>
    <input type="number" name="idade[]" placeholder= "Digite a 5ª idade"><br>
    <br>
    <button type="submit" style="color: rgb(188, 125, 217)">Cadastrar</button>
 
    </form>
 
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["idade"])) {
        $idade = $_POST["idade"];
        
        echo "<h2>Média das idades:</h2>";
        
        $soma= array_sum($idade);
        $media= $soma / 5;
        
        echo "<h4>Idades</h4>";
        
        for ($i = 1; $i < count($idade); $i++) {
            
            echo "<li>$idade[$i]</li>";
    }
    echo "<h3>Média: " . $media . "<h3>";

    echo "</ul>";
}
?>
   
</body>
</html>
 
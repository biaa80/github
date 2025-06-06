<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h2 style="color: purple">Digite as frutas</h2>
    <form method="post">
    <input type="text" name="frutas[]" placeholder= "Digite a 1ª fruta"><br>
    <br>
    <input type="text" name="frutas[]" placeholder= "Digite a 2ª fruta"><br>
    <br>
    <input type="text" name="frutas[]" placeholder= "Digite a 3ª fruta"><br>
    <br>
    <button style="color: purple" type="submit">Cadastrar</button>


    </form>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["frutas"])){
        $frutas= array_filter($_POST["frutas"]);
        echo "<h3>Lista de frutas</h3>";
        if(!empty($frutas)){
            for($i = 0; $i < count($frutas); $i ++){
            echo "<li>$frutas[$i]</li>";
        }
    
    }else{
        echo "<p>Nenhuma fruta foi cadastrada</p>";
   } 
}

?>
</body>
</html>
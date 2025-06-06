<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
<h2 style="color: purple">Digite três produtos e seus preços</h2>

<form method="post">
    <input type="text" name="produto[]" placeholder= "Digite o 1° produto"><br>
    <br>
    <input type="number" name="produto[]" placeholder= "Digite o 1° preço"><br>
    <br>
    <input type="text" name="produto[]" placeholder= "Digite o 2° produto"><br>
    <br>
    <input type="number" name="produto[]" placeholder= "Digite o 2° preço"><br>
    <br>
    <input type="text" name="produto[]" placeholder= "Digite o 3° produto"><br>
    <br>
    <input type="number" name="produto[]" placeholder= "Digite o 3° preço"><br>
    <br>
    <button style="color: purple" type="submit">Cadastrar</button>


</form>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["produto"])){
        $produto= array_filter($_POST["produto"]);
        echo "<h3>Lista de Produtos e Preços</h3>";
        if(!empty($produto)){
            for($i = 0; $i < count($produto); $i ++){
            echo "<li>$produto[$i]</li>";
        }
    
    }else{
        echo "<p>Nenhum produto e preço foram cadastrados</p>";
   } 
}
?>
</body>
</html>
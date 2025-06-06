<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h2 style="color: purple">Digite quatro cores</h2>
    <form method="post">
    <input type="text" name="cores[]" placeholder= "Digite a 1ª cor"><br>
    <br>
    <input type="text" name="cores[]" placeholder= "Digite a 2ª cor"><br>
    <br>
    <input type="text" name="cores[]" placeholder= "Digite a 3ª cor"><br>
    <br>
    <input type="text" name="cores[]" placeholder= "Digite a 4ª cor"><br>
    <br>
    <button style="color: purple" type="submit">Confirmar</button>


    </form>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["cores"])){
        $cores= array_filter($_POST["cores"]);
        echo "<h3>Lista de cores</h3>";
        if(!empty($cores)){
            for($i = 0; $i < count($cores); $i ++){
            echo "<li>$cores[$i]</li>";
        }
    
    }else{
        echo "<p>Nenhuma cor foi cadastrada</p>";
   } 
}
?>

</body>
</html>
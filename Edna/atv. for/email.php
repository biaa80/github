<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h2 style="color: purple">Digite cinco e-mails</h2>
    <form method="post">
    <input type="text" name="email[]" placeholder= "Digite o 1° e-mail"><br>
    <br>
    <input type="text" name="email[]" placeholder= "Digite o 2° e-mail"><br>
    <br>
    <input type="text" name="email[]" placeholder= "Digite o 3° e-mail"><br>
    <br>
    <input type="text" name="email[]" placeholder= "Digite o 4° e-mail"><br>
    <br>
    <input type="text" name="email[]" placeholder= "Digite o 5° e-mail"><br>
    <br>
    <button style="color: purple" type="submit">Cadastrar</button>


    </form>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["email"])){
        $email= array_filter($_POST["email"]);
        echo "<h3>Lista de e-mails</h3>";
        if(!empty($email)){
            for($i = 0; $i < count($email); $i ++){
            echo "<li>$email[$i]</li>";
        }
    
    }else{
        echo "<p>Nenhum email foi cadastrada</p>";
   } 
}
?>

</body>
</html>
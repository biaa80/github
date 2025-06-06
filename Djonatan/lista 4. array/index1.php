<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição de nomes</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Exibição de nomes</h2>
    <form method="post">
        <label for="nome" style="color:rgb(188, 125, 217)">Digite cinco nomes para a lista:</label><br><br>
        <input type="text" name="nome[]" id="nome" required>
        <br><br>
        <input type="text" name="nome[]" id="nome" required>
        <br><br>
        <input type="text" name="nome[]" id="nome" required>
        <br><br>
        <input type="text" name="nome[]" id="nome" required>
        <br><br>
        <input type="text" name="nome[]" id="nome" required>
        <br><br>
        <button type="submit">Confirmar</button>
    </form>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["nome"])) {
        $nome= array_filter($_POST["nome"]);

        echo "<h3>Lista de nomes</h3>";

        if(!empty($nome)){
            for($i = 0; $i < count($nome); $i ++){
            echo "<li>$nome[$i]</li>";
        }
    }else{
    echo "<p>Nenhum nome foi cadastrado</p>";
} 
}
?>
</body>
</html>
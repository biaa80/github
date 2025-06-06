<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de Vogais</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Contagem de Vogais</h2>
    
    <form method="post">
        <label style="color:rgb(188, 125, 217)">Digite uma palavra:</label><br><br>
        <input type="text" name="palavra" required><br><br>
        <button type="submit">Contar Vogais</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["palavra"])) {
        $palavra = $_POST["palavra"];
        $vogais = ['a', 'e', 'i', 'o', 'u'];
        $contador = 0;

        // Percorre os caracteres da palavra
        foreach (str_split(strtolower($palavra)) as $caractere) {
            if (in_array($caractere, $vogais)) {
                $contador++; 
            }
        }

        echo "<h3>A palavra '$palavra' contém $contador vogais.</h3>";
    }
    ?>
</body>
</html>

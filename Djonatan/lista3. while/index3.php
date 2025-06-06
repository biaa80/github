<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número perfeito</title>
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
       
        $soma = 0;
        $i = 1;

        while ($i < $numero) {
            if($numero % $i == 0) {
                $soma += $i;
            }
            $i++;
        }

        if ($soma == $numero) {
            echo "<p>$numero é um número perfeito.<p>";
        } else {
            echo "<p>$numero não é um númro perfeito.<p>";
        }
 
}
?>
</body>
</html>
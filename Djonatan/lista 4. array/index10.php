<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulação de Sorteio</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Simulação de Sorteio</h2>
    
    <form method="post">
        <label style="color:rgb(188, 125, 217)">Digite os nomes dos cinco participantes:</label><br><br>
        
        <label>Participante 1:</label>
        <input type="text" name="participantes[]" required><br><br>
        
        <label>Participante 2:</label>
        <input type="text" name="participantes[]" required><br><br>
        
        <label>Participante 3:</label>
        <input type="text" name="participantes[]" required><br><br>
        
        <label>Participante 4:</label>
        <input type="text" name="participantes[]" required><br><br>
        
        <label>Participante 5:</label>
        <input type="text" name="participantes[]" required><br><br>
        
        <button type="submit">Sorteio</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["participantes"])) {
        $participantes = $_POST["participantes"];
        
        $vencedor = $participantes[array_rand($participantes)];

        echo "<h3>O vencedor do sorteio é: <strong>$vencedor</strong></h3>";
    }
    ?>
</body>
</html>

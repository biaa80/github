<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos em Ordem Alfabética</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Lista de Alunos em Ordem Alfabética</h2>
    
    <form method="post">
        <label style="color:rgb(188, 125, 217)">Digite os nomes de cinco alunos:</label><br><br>
        
        <label>Aluno 1:</label>
        <input type="text" name="alunos[]" required><br><br>
        
        <label>Aluno 2:</label>
        <input type="text" name="alunos[]" required><br><br>
        
        <label>Aluno 3:</label>
        <input type="text" name="alunos[]" required><br><br>
        
        <label>Aluno 4:</label>
        <input type="text" name="alunos[]" required><br><br>
        
        <label>Aluno 5:</label>
        <input type="text" name="alunos[]" required><br><br>
        
        <button type="submit">Confirmar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["alunos"])) {
        $alunos = $_POST["alunos"];
        
        sort($alunos);

        echo "<h3>Lista de Alunos em Ordem Alfabética:</h3>";
        echo "<ul>";
        foreach ($alunos as $aluno) {
            echo "<li>$aluno</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>

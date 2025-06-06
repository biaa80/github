<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <script src="script4.js"></script>
</head>
<body>
<h1>Formulário para enviar feedback</h1>

<form action="" onsubmit="return validar()" method="post">
    <label for="nota">Nota:</label>
    <input type="number" id="nota" name="nota"><br><br>

    <label for="comentario">Comentário:</label>
    <input type="text" id="comentario" name="comentario"><br><br>

    <input type="submit" value="Avançar">
</form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "<h2>Dados comentados</h2>";
        echo "<p>Nota: " . $_POST['nota'] . "</p>";
        echo "<p>Comentário: " . $_POST['comentario'] . "</p>";
}
    ?>
</body>
</html>
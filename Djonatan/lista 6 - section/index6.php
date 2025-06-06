<?php
session_start();

if (isset($_POST['tema'])) {
    $_SESSION['tema'] = $_POST['tema'];
}

$tema = isset($_SESSION['tema']) ? $_SESSION['tema'] : 'claro';
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Tema</title>
    <style>
        body {
            background-color: <?php echo $tema === 'escuro' ? '#333' : '#fff'; ?>;
            color: <?php echo $tema === 'escuro' ? '#fff' : '#000'; ?>;
        }
    </style>
</head>
<body>

<h2>Escolha um Tema</h2>
<form method="post">
    <button type="submit" name="tema" value="claro">Claro</button>
    <button type="submit" name="tema" value="escuro">Escuro</button>
</form>

</body>
</html>

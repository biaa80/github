<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Acessos</title>
</head>
<body>

<?php
session_start(); 

if (isset($_POST['reset'])) {
    $_SESSION['contador'] = 0;
} else {
   
    if (!isset($_SESSION['contador'])) {
        $_SESSION['contador'] = 0;
    }

    $_SESSION['contador']++;
}
?>

<h2>Bem-vindo!</h2>
<p>Você acessou esta página <strong><?php echo $_SESSION['contador']; ?></strong> vezes.</p>

<form method="post">
    <button type="submit" name="reset">Resetar Contagem</button>
</form>

</body>
</html>

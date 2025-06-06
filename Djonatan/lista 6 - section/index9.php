<?php
session_start();

if (isset($_POST['sucesso'])) {
    $_SESSION['mensagem'] = "Ação realizada com sucesso!";
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Notificações</title>
</head>
<body>

<?php if (isset($_SESSION['mensagem'])): ?>
    <p style="color: green;"><?php echo $_SESSION['mensagem']; ?></p>
    <?php unset($_SESSION['mensagem']); ?>
<?php endif; ?>

<form method="post">
    <button type="submit" name="sucesso">Simular Notificação</button>
</form>

</body>
</html>

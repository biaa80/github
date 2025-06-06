<?php
session_start();

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $_SESSION['nome'] = $_POST['nome'];
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Persistência do Nome</title>
</head>
<body>

<?php if (isset($_SESSION['nome'])): ?>
    <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['nome']); ?>!</h2>
    <form method="post">
        <button type="submit" name="logout">Sair</button>
    </form>
<?php else: ?>
    <form method="post">
        <label>Digite seu nome:</label>
        <input type="text" name="nome" required>
        <button type="submit">Salvar Nome</button>
    </form>
<?php endif; ?>

</body>
</html>

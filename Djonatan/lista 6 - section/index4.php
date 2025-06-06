<?php
session_start();

$usuario_correto = "admin";
$senha_correta = "1234";

if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    if ($_POST['usuario'] === $usuario_correto && $_POST['senha'] === $senha_correta) {
        $_SESSION['logado'] = $_POST['usuario'];
    } else {
        $erro = "Usuário ou senha incorretos!";
    }
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
    <title>Login</title>
</head>
<body>

<?php if (isset($_SESSION['logado'])): ?>
    <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['logado']); ?>!</h2>
    <form method="post">
        <button type="submit" name="logout">Sair</button>
    </form>
<?php else: ?>
    <h2>Login</h2>
    <?php if (isset($erro)) echo "<p style='color:red;'>$erro</p>"; ?>
    <form method="post">
        <label>Usuário:</label>
        <input type="text" name="usuario" required>
        <br>
        <label>Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
<?php endif; ?>

</body>
</html>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once "config.php";

// Se já estiver logado, redireciona
if (!empty($_SESSION['user'])) {
    header("Location: " . BASEURL . "index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="max-width:420px;width:100%;">
        <h3 class="text-center mb-3">Acessar Sistema</h3>

        <?php if (!empty($_SESSION['messages'])): ?>
            <div class="alert alert-<?php echo $_SESSION['type'] ?? 'info'; ?>">
                <?php echo $_SESSION['messages']; ?>
            </div>
            <?php unset($_SESSION['messages'], $_SESSION['type']); ?>
        <?php endif; ?>

        <form action="<?php echo BASEURL; ?>auth.php" method="POST" novalidate>
            <div class="mb-3">
                <label class="form-label">Usuário ou Email</label>
                <input type="text" name="username" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button class="btn btn-primary w-100">Entrar</button>
        </form>

        <div class="mt-3 text-center">
            <a href="<?php echo BASEURL; ?>users/register.php">Criar conta</a> |
            <a href="<?php echo BASEURL; ?>users/forgot_password.php">Esqueci a senha</a>
        </div>
    </div>
</body>
</html>
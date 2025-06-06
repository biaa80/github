<?php
session_start();

if (!isset($_SESSION['etapa'])) {
    $_SESSION['etapa'] = 1;
}

if ($_SESSION['etapa'] == 1 && isset($_POST['nome'])) {
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['etapa'] = 2;
} elseif ($_SESSION['etapa'] == 2 && isset($_POST['endereco'])) {
    $_SESSION['endereco'] = $_POST['endereco'];
    $_SESSION['etapa'] = 3;
} elseif ($_SESSION['etapa'] == 3 && isset($_POST['confirmar'])) {
    $_SESSION['etapa'] = 4;
}

if (isset($_POST['reiniciar'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Formulário Multi-Etapas</title>
</head>
<body>

<?php if ($_SESSION['etapa'] == 1): ?>
    <h2>Passo 1: Nome</h2>
    <form method="post">
        <input type="text" name="nome" required>
        <button type="submit">Próximo</button>
    </form>

<?php elseif ($_SESSION['etapa'] == 2): ?>
    <h2>Passo 2: Endereço</h2>
    <form method="post">
        <input type="text" name="endereco" required>
        <button type="submit">Próximo</button>
    </form>

<?php elseif ($_SESSION['etapa'] == 3): ?>
    <h2>Passo 3: Confirmação</h2>
    <p>Nome: <?php echo $_SESSION['nome']; ?></p>
    <p>Endereço: <?php echo $_SESSION['endereco']; ?></p>
    <form method="post">
        <button type="submit" name="confirmar">Finalizar</button>
    </form>

<?php else: ?>
    <h2>Cadastro Concluído!</h2>
    <form method="post">
        <button type="submit" name="reiniciar">Reiniciar</button>
    </form>
<?php endif; ?>

</body>
</html>

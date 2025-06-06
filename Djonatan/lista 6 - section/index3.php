<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

if (isset($_POST['produto'])) {
    $_SESSION['carrinho'][] = $_POST['produto'];
}

if (isset($_POST['limpar'])) {
    $_SESSION['carrinho'] = [];
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
</head>
<body>

<h2>Adicionar Produto ao Carrinho</h2>
<form method="post">
    <input type="text" name="produto" placeholder="Nome do Produto" required>
    <button type="submit">Adicionar</button>
</form>

<h2>Seu Carrinho</h2>
<ul>
    <?php foreach ($_SESSION['carrinho'] as $item): ?>
        <li><?php echo htmlspecialchars($item); ?></li>
    <?php endforeach; ?>
</ul>

<form method="post">
    <button type="submit" name="limpar">Esvaziar Carrinho</button>
</form>

</body>
</html>

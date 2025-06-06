<?php
session_start();

$perguntas = [
    "Qual é o maior país do mundo?" => "Rússia",
    "Qual é a raíz de 121?" => "11",
    "O que significa a sigla 'CPF'?" => "Cadastro de pessoa física"
];

if (!isset($_SESSION['quiz'])) {
    $_SESSION['quiz'] = ['pontos' => 0, 'pergunta_atual' => 0];
}

if (isset($_POST['resposta'])) {
    $pergunta = array_keys($perguntas)[$_SESSION['quiz']['pergunta_atual']];
    if (strtolower($_POST['resposta']) === strtolower($perguntas[$pergunta])) {
        $_SESSION['quiz']['pontos']++;
    }
    $_SESSION['quiz']['pergunta_atual']++;
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
    <title>Quiz</title>
</head>
<body>

<?php if ($_SESSION['quiz']['pergunta_atual'] < count($perguntas)): ?>
    <form method="post">
        <p><?php echo array_keys($perguntas)[$_SESSION['quiz']['pergunta_atual']]; ?></p>
        <input type="text" name="resposta" required>
        <button type="submit">Responder</button>
    </form>
<?php else: ?>
    <h2>Quiz Finalizado! Pontuação: <?php echo $_SESSION['quiz']['pontos']; ?></h2>
    <form method="post">
        <button type="submit" name="reiniciar">Reiniciar Quiz</button>
    </form>
<?php endif; ?>

</body>
</html>

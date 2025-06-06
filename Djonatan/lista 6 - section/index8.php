<?php
session_start();

if (!isset($_SESSION['tempo_total'])) {
    $_SESSION['tempo_total'] = 0;
}
if (!isset($_SESSION['inicio_visita'])) {
    $_SESSION['inicio_visita'] = time();
}

if (isset($_POST['sair'])) {
    $_SESSION['tempo_total'] += time() - $_SESSION['inicio_visita'];
    unset($_SESSION['inicio_visita']);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Tempo na Página</title>
</head>
<body>

<h2>Tempo total na página: <?php echo $_SESSION['tempo_total']; ?> segundos</h2>

<form method="post">
    <button type="submit" name="sair">Sair e Salvar Tempo</button>
</form>

</body>
</html>

<?php
session_start();

$ultimo_acesso = isset($_SESSION['ultimo_acesso']) ? $_SESSION['ultimo_acesso'] : "Primeira vez aqui!";
$_SESSION['ultimo_acesso'] = date("d/m/Y H:i:s");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Último Acesso</title>
</head>
<body>

<h2>Último Acesso: <?php echo $ultimo_acesso; ?></h2>

</body>
</html>

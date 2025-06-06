<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
<form method="post">
    <label>Usuário:</label><br>
    <input type="text" name="usuario" required><br><br>

    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>

    <button type="submit">Verificar</button>
</form>

<?php    
    $senha_correta = 12345;
    $usuario_correto = "fernanda";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = trim($_POST["usuario"]); 
        $senha = intval($_POST["senha"]); 

        if ($usuario === $usuario_correto && $senha === $senha_correta) {
            echo "<p style='color:green;'>Seja Bem-Vinda!</p>";
        } else {
            echo "<p style='color:red;'>Acesso Negado</p>";
        }
    }
?>
</body>
</html>
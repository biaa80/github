<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Simples</title>
</head>
<body>
    <h2 style="color:rgb(188, 125, 217)">Sistema de Login</h2>

    <form method="post">
        <label for="usuario" style="color:rgb(188, 125, 217)">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>

        <label for="senha" style="color:rgb(188, 125, 217)">Senha:</label>
        <input type="password" name="senha" id="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario_correto = "aluno";
        $senha_correta = "1234";
        $usuario = "";
        $senha = "";

        do {
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];

            if ($usuario !== $usuario_correto || $senha !== $senha_correta) {
                echo "<h3 style='color:red;'>Usuário ou senha incorretos. Tente novamente.</h3>";
                break; // Sai do loop para evitar repetição desnecessária
            }
        } while ($usuario !== $usuario_correto || $senha !== $senha_correta);

        if ($usuario === $usuario_correto && $senha === $senha_correta) {
            echo "<h3 style='color:green;'>Login bem-sucedido! Bem-vindo, $usuario.</h3>";
        }
    }
    ?>

</body>
</html>

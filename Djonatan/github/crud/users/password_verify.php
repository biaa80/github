<?php
require_once('../config.php');
require_once(DBAPI);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conn = open_database();
    $stmt = $conn->prepare("UPDATE users SET password = ?, modified = NOW() WHERE id = ?");
    $stmt->bind_param("si", $newPassword, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Senha alterada com sucesso!');window.location='../login.php';</script>";
    } else {
        echo "<script>alert('Erro ao alterar senha!');</script>";
    }
    $stmt->close();
    $conn->close();
}

// se veio via GET, mostra o formulário
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
} else {
    die("Usuário inválido!");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar Senha</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Alterar Senha</h3>
                    <form method="post">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <div class="mb-3">
                            <label>Nova Senha</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Salvar</button>
                    </form>
                    <div class="mt-3 text-center">
                        <a href="../login.php">Voltar ao Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

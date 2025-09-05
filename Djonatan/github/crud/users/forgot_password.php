<?php
require_once('../config.php');
require_once(DBAPI);

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = trim($_POST['user']); // username ou email

    $conn = open_database();
    $stmt = $conn->prepare("SELECT id, name FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $input, $input);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        header("Location: password_verify.php?id=" . $user['id']);
        exit;
    } else {
        $message = "Usuário não encontrado!";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Esqueci minha senha</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Esqueci minha senha</h3>
                    
                    <?php if($message): ?>
                        <div class="alert alert-danger text-center"><?= $message ?></div>
                    <?php endif; ?>

                    <form method="post">
                        <div class="mb-3">
                            <label>Digite seu Username ou Email</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Avançar</button>
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
<?php
require 'functions.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if(createUser($name, $username, $email, $password)){
        echo "<script>alert('Conta criada com sucesso!');window.location='../login.php';</script>";
    } else {
        echo "<script>alert('Erro ao criar conta. Verifique se username ou email já existe.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registrar</title>
    <link rel="stylesheet" href="../crud/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Criar Conta</h3>
                    <form method="post">
                        <div class="mb-3">
                            <label>Nome</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Senha</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Registrar</button>
                    </form>
                    <div class="mt-3 text-center">
                        <a href="../login.php">Já possui conta? Entrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
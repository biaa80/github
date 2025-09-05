<?php
require_once 'config.php';
require_once 'users/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = trim($_POST['username']); // pode ser username ou email
    $password = $_POST['password'];

    // Usa a função já existente em functions.php
    $user = findUserLogin($input);

    if ($user && password_verify($password, $user['password'])) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // mantém compatível com o resto do projeto
        $_SESSION['user'] = [
            'id'           => $user['id'],
            'name'         => $user['name'],
            'username'     => $user['username'],
            'email'        => $user['email'],
            'access_level' => $user['access_level']
        ];

        header("Location: index.php");
        exit;
    } else {
        echo "<script>alert('Usuário ou senha inválidos!');window.location='login.php';</script>";
        exit;
    }
}
?>
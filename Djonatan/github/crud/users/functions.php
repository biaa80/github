<?php
require_once(__DIR__ . '/../config.php');
require_once(DBAPI);

function isLoggedIn(): bool {
    return !empty($_SESSION['user_id']);
}

function currentUser(): ?array {
    if (!isLoggedIn()) return null;
    $db = open_database();
    if (!$db) return null;
    $stmt = $db->prepare("SELECT id, name, username, email, access_level, created, modified 
                          FROM users WHERE id = ?");
    $stmt->bind_param("i", $_SESSION['user_id']);
    $stmt->execute();
    $res = $stmt->get_result();
    return $res->fetch_assoc() ?: null;
}

function createUser(string $name, string $username, string $email, string $password): bool {
    $db = open_database();
    if (!$db) return false;

    $stmt = $db->prepare("SELECT id FROM users WHERE username = ? OR email = ? LIMIT 1");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) return false;

    $hashed = password_hash($password, PASSWORD_DEFAULT);
    $access = 'user'; 

    $stmt = $db->prepare("INSERT INTO users (name, username, email, password, access_level, created, modified) 
                          VALUES (?, ?, ?, ?, ?, NOW(), NOW())");
    $stmt->bind_param("sssss", $name, $username, $email, $hashed, $access);
    return $stmt->execute();
}

function findUserLogin(string $login): ?array {
    $db = open_database();
    if (!$db) return null;
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ? OR email = ? LIMIT 1");
    $stmt->bind_param("ss", $login, $login);
    $stmt->execute();
    $res = $stmt->get_result();
    return $res->fetch_assoc() ?: null;
}

function updateUserPassword(int $id, string $newPassword): bool {
    $db = open_database();
    if (!$db) return false;
    $hashed = password_hash($newPassword, PASSWORD_DEFAULT);
    $stmt = $db->prepare("UPDATE users SET password = ?, modified = NOW() WHERE id = ?");
    $stmt->bind_param("si", $hashed, $id);
    return $stmt->execute();
}

function requireLevel(array $allowed) {
    if (!isLoggedIn() || empty($_SESSION['access_level']) || !in_array($_SESSION['access_level'], $allowed)) {
        header("Location: " . BASEURL . "login.php");
        exit;
    }
}

<?php
// controllers/UsuarioController.php
require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../config/conn.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $usuarioModel = new Usuario($pdo);
    $usuario = $usuarioModel->autenticar($email, $senha);

    if ($usuario) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_nome'] = $usuario['nome'];
        header('Location: ../admin/dashboard_admin.php');
        exit;
    } else {
        echo "Login inválido!";
    }
}

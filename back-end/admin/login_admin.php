<?php
session_start();
require_once '../conn.php';
require_once 'auth_admin.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        $_SESSION['admin'] = $usuario['id'];
        header('Location: dashboard_admin.php');
        exit;
    } else {
        $erro = "Email ou senha inválidos.";
    }
}
?>

<!-- Formulário simples -->
<form method="POST">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="senha" placeholder="Senha" required><br>
    <button type="submit">Entrar</button>
    <?php if (!empty($erro)) echo "<p>$erro</p>"; ?>
</form>

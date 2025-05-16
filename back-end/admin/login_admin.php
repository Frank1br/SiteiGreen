<?php
require 'conexao.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch();

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        $_SESSION['admin'] = $usuario['id'];
        header("Location: admin/dashboard.php");
        exit;
    } else {
        $erro = "Email ou senha inválidos.";
    }

    $senhaHash = password_hash("123456", PASSWORD_DEFAULT);
    
}
?>

<form method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Entrar</button>
    <?php if (isset($erro)) echo "<p>$erro</p>"; ?>
</form>

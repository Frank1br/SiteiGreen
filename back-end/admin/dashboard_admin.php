<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}
?>

<h2>Área Administrativa</h2>
<ul>
    <li><a href="posts/index.php">Gerenciar Posts</a></li>
    <li><a href="categorias/index.php">Gerenciar Categorias</a></li>
    <li><a href="contatos.php">Mensagens de Contato</a></li>
    <li><a href="leads.php">Leads</a></li>
    <li><a href="sobre.php">Quem Somos</a></li>
    <li><a href="../logout.php">Sair</a></li>
</ul>

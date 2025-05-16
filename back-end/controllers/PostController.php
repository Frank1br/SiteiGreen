<?php
// controllers/PostController.php
require_once __DIR__ . '/../models/Post.php';
require_once __DIR__ . '/../config/conn.php';

session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: ../admin/login_admin.php');
    exit;
}

$postModel = new Post($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_POST['acao'] ?? '';

    if ($acao === 'criar') {
        $titulo = $_POST['titulo'];
        $slug = $_POST['slug'];
        $conteudo = $_POST['conteudo'];
        $imagem = $_POST['imagem'];
        $categoria_id = $_POST['categoria_id'];
        $autor_id = $_SESSION['admin_id'] ?? 1; // Ajustar conforme necessidade
        $postModel->criar($titulo, $slug, $conteudo, $imagem, $categoria_id, $autor_id);
        header('Location: ../admin/posts/index_post_admin.php');
        exit;
    }

    if ($acao === 'editar') {
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $slug = $_POST['slug'];
        $conteudo = $_POST['conteudo'];
        $imagem = $_POST['imagem'];
        $categoria_id = $_POST['categoria_id'];
        $postModel->editar($id, $titulo, $slug, $conteudo, $imagem, $categoria_id);
        header('Location: ../admin/posts/index_post_admin.php');
        exit;
    }

    if ($acao === 'deletar') {
        $id = $_POST['id'];
        $postModel->deletar($id);
        header('Location: ../admin/posts/index_post_admin.php');
        exit;
    }
}

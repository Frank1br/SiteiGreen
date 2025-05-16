<?php
// controllers/CategoriaController.php
require_once __DIR__ . '/../models/Categoria.php';
require_once __DIR__ . '/../config/conn.php';

session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: ../admin/login_admin.php');
    exit;
}

$categoriaModel = new Categoria($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_POST['acao'] ?? '';

    if ($acao === 'criar') {
        $nome = $_POST['nome'];
        $slug = $_POST['slug'];
        $categoriaModel->criar($nome, $slug);
        header('Location: ../admin/categorias/index_catego_admin.php');
        exit;
    }

    if ($acao === 'editar') {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $slug = $_POST['slug'];
        $categoriaModel->editar($id, $nome, $slug);
        header('Location: ../admin/categorias/index_catego_admin.php');
        exit;
    }

    if ($acao === 'deletar') {
        $id = $_POST['id'];
        $categoriaModel->deletar($id);
        header('Location: ../admin/categorias/index_catego_admin.php');
        exit;
    }
}

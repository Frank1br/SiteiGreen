<?php
// controllers/LeadController.php
require_once __DIR__ . '/../models/Lead.php';
require_once __DIR__ . '/../config/conn.php';

session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: ../admin/login_admin.php');
    exit;
}

$leadModel = new Lead($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_POST['acao'] ?? '';

    if ($acao === 'criar') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $leadModel->criar($nome, $email);
        header('Location: ../admin/leads/index_leads_admin.php');
        exit;
    }

    if ($acao === 'confirmar') {
        $id = $_POST['id'];
        $leadModel->confirmar($id);
        header('Location: ../admin/leads/index_leads_admin.php');
        exit;
    }

    if ($acao === 'deletar') {
        $id = $_POST['id'];
        $leadModel->deletar($id);
        header('Location: ../admin/leads/index_leads_admin.php');
        exit;
    }
}

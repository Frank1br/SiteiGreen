<?php
// models/Lead.php
require_once __DIR__ . '/../config/conn.php';

class Lead {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function listarTodos() {
        $stmt = $this->pdo->query("SELECT * FROM leads");
        return $stmt->fetchAll();
    }

    public function criar($nome, $email) {
        $stmt = $this->pdo->prepare("INSERT INTO leads (nome, email) VALUES (?, ?)");
        return $stmt->execute([$nome, $email]);
    }

    public function confirmar($id) {
        $stmt = $this->pdo->prepare("UPDATE leads SET confirmado = TRUE WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function deletar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM leads WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

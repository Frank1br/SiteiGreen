<?php
// models/Categoria.php
require_once __DIR__ . '/../config/conn.php';

class Categoria {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function listarTodas() {
        $stmt = $this->pdo->query("SELECT * FROM categorias");
        return $stmt->fetchAll();
    }

    public function criar($nome, $slug) {
        $stmt = $this->pdo->prepare("INSERT INTO categorias (nome, slug) VALUES (?, ?)");
        return $stmt->execute([$nome, $slug]);
    }

    public function deletar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM categorias WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function editar($id, $nome, $slug) {
        $stmt = $this->pdo->prepare("UPDATE categorias SET nome = ?, slug = ? WHERE id = ?");
        return $stmt->execute([$nome, $slug, $id]);
    }
}

<?php
// models/Post.php
require_once __DIR__ . '/../config/conn.php';

class Post {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function listarTodos() {
        $stmt = $this->pdo->query("SELECT * FROM posts");
        return $stmt->fetchAll();
    }

    public function criar($titulo, $slug, $conteudo, $imagem, $categoria_id, $autor_id) {
        $stmt = $this->pdo->prepare("INSERT INTO posts (titulo, slug, conteudo, imagem, categoria_id, autor_id) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$titulo, $slug, $conteudo, $imagem, $categoria_id, $autor_id]);
    }

    public function editar($id, $titulo, $slug, $conteudo, $imagem, $categoria_id) {
        $stmt = $this->pdo->prepare("UPDATE posts SET titulo = ?, slug = ?, conteudo = ?, imagem = ?, categoria_id = ?, atualizado_em = NOW() WHERE id = ?");
        return $stmt->execute([$titulo, $slug, $conteudo, $imagem, $categoria_id, $id]);
    }

    public function deletar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM posts WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function buscarPorId($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}

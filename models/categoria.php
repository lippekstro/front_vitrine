<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/db/conexao.php";

class Categoria{
    public $nome_categoria;
    public $foto_categoria;
    public $id_categoria;

    public function criar(){
        $sql = "INSERT INTO categorias (nome_categoria, foto_categoria) VALUES (:nome, :foto)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $this->nome_categoria);
        $stmt->bindValue(':foto', $this->foto_categoria);
        $stmt->execute();
    }

    public static function listar(){
        $sql = "SELECT * FROM categorias";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        return $resultado;
    }

    // editar categoria
    // deletar categoria
    // carregar
}
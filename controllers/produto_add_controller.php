<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/models/produto.php";

try {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];

    if (!empty($_FILES['foto']['tmp_name'])) {
        $foto = file_get_contents($_FILES['foto']['tmp_name']);
    }

    $produto = new Produto();
    $produto->nome_produto = $nome;
    $produto->preco = $preco;
    $produto->descricao = $descricao;
    $produto->id_categoria = $categoria;
    if ($foto) {
        $produto->foto_produto = $foto;
    } else {
        $produto->foto_produto = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/front_vitrine/imgs/dummy.png');
    }

    $produto->criar();

    header('Location: /front_vitrine/views/admin/produtos_gerenciar.php');
    exit();

} catch (PDOException $e) {
    echo $e->getMessage();
}

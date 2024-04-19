<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/models/produto.php";

try {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    if(!empty($_FILES['foto']['tmp_name'])){
        $foto = file_get_contents($_FILES['foto']['tmp_name']);
    }
    $categoria = $_POST['categoria'];

    $produto = new Produto();
    $produto->preco = $preco;
    $produto->nome_produto = $nome;
    $produto->descricao = $descricao;
    $produto->id_categoria = $categoria;
    if($foto){
        $produto->foto = $foto;
    } else {
        $produto->foto = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/front_vitrine/imgs/dummy.png');
    }

    $produto->criar();
    
    header('Location: /front_vitrine/views/admin/produtos_gerenciar.php');

} catch (PDOException $e) {
    echo $e->getMessage();
}
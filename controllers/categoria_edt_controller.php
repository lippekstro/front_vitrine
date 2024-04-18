<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/models/categoria.php";

try {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    if(!empty($_FILES['foto']['tmp_name'])){
        $foto = file_get_contents($_FILES['foto']['tmp_name']);
    }

    $categoria = new Categoria($id);
    $categoria->nome_categoria = $nome;
    if($foto){
        $categoria->foto_categoria = $foto;
    } else {
        $categoria->foto_categoria = $categoria->foto_categoria;
    }

    $categoria->editar();

    header('Location: /front_vitrine/views/admin/categorias_gerenciar.php');

} catch (PDOException $e) {
    echo $e->getMessage();
}
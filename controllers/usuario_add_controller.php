<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/models/usuario.php";

try {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    if(!empty($_FILES['foto']['tmp_name'])){
        $foto = file_get_contents($_FILES['foto']['tmp_name']);
    }

    $usuario = new Usuario();
    $usuario->nome = $nome;
    $usuario->email = $email;
    $usuario->senha = $senha;
    if($foto){
        $usuario->foto = $foto;
    } else {
        $usuario->foto = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/front_vitrine/imgs/dummy_usuario.png');
    }

    $usuario->criar();

    header('Location: /front_vitrine/views/login.php');
    exit();

} catch (PDOException $erro) {
    echo $erro->getMessage();
}
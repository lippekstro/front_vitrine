<?php
require_once '../models/usuario.php';


try {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = password_hash($senha, PASSWORD_DEFAULT);

    if (!empty($_FILES['foto']['tmp_name'])) {
        $img_usuario = file_get_contents($_FILES['foto']['tmp_name']);
    }


    $usuarios = new usuario();
    $usuarios->nome = $nome;
    $usuarios->email = $email;
    $usuarios->senha = $senha;
    $usuarios->img_usuario = $img_usuario;

    $usuarios->criar();

    header('Location: /front_vitrine/views/login.php');
    exit();

} catch (PDOException $e) {
    echo $e->getMessage();
}
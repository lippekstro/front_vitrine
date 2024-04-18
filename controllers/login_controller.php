<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/models/usuario.php";

try {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    Usuario::logar($email, $senha);

} catch (PDOException $e) {
    echo $e->getMessage();
}
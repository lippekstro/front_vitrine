<?php

require_once '../models/usuario.php';

try {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    Usuario::logar($email, $senha);

} catch (PDOException $e) {
    echo $e->getMessage();
}
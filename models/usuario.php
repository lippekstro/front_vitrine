<?php

require_once '../db/conexao.php';

class Usuario {
    public $id_usuario;
    public $nome;
    public $email;
    public $senha;
    public $foto;

    public function __construct($id = false)
    {
        if($id){
            $this->id_usuario = $id;
            $this->carregar();
        }
    }
}
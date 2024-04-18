<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/front_vitrine/db/conexao.php";

class Usuario {
    public $id_usuario;
    public $nome;
    public $email;
    public $senha;
    public $foto;
    public $nivel_usuario;

    public function __construct($id = false)
    {
        if($id){
            $this->id_usuario = $id;
            //$this->carregar();
        }
    }

    public function criar(){
        $sql = "INSERT INTO usuarios (nome_usuario, email, senha, foto_usuario) VALUES (:nome, :email, :senha, :foto)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':foto', $this->foto);
        $stmt->execute();
    }

    public static function logar($email, $senha){
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        $resultado = $stmt->fetch();

        if(isset($resultado['id_usuario']) && password_verify($senha, $resultado['senha'])){
            session_start();
            $_SESSION['usuario']['nome'] = $resultado['nome_usuario'];
            $_SESSION['usuario']['email'] = $resultado['email'];
            $_SESSION['usuario']['foto'] = $resultado['foto_usuario'];
            header('Location: /front_vitrine/views/perfil.php');
            exit();
        } else {
            header('Location: /front_vitrine/views/login.php');
            exit();
        }
    }
    
    // carregar
    // editar
    // editar senha
    // editar foto
}
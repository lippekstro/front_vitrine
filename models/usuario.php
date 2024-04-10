<?php
require_once '../db/conexao.php';

class usuario
{
    public  $id_usuario;
    public  $nome;
    public  $email;
    public  $senha;
    public  $img_usuario;
    public  $nivel_acesso;

    public function __construct($id_usuario = false)
    {
        if ($id_usuario) {
            $this->id_usuario = $id_usuario;
            $this->carregar();
        }
    }


    public function carregar()
    {
        $query = "SELECT * FROM usuarios WHERE id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();
        /* ao encontrar ela cria um array e depois atribui todos os valores restantes ao objeto */
        $id_usuario = $stmt->fetch();
        $this->nome = $id_usuario['nome'];
        $this->email = $id_usuario['email'];
        $this->senha = $id_usuario['senha'];
        $this->img_usuario = $id_usuario['img_usuario'];
        $this->nivel_acesso = $id_usuario['nivel_acesso'];
    }

    public function criar()
    {
        $query = "INSERT INTO usuarios (nome, email, senha, img_usuario) VALUES  (:nome, :email, :senha,:img_usuario)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':img_usuario', $this->img_usuario);
        $stmt->execute();
        $id_usuario = $conexao->lastInsertId();
        return $id_usuario;
    }

    public static function listar()
    {
        $query = "SELECT * FROM usuarios";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public function editar()
    {
        $query = "UPDATE usuarios SET nome = :nome, email = :email WHERE id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(":email", $this->email);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM usuarios WHERE id_usuario = :id";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();
    }

    public static function logar($email, $senha)
    {
        $query = "SELECT * FROM usuarios WHERE email = :email";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $registro = $stmt->fetch();


        if (isset($registro['id_usuario']) && password_verify($senha, $registro['senha'])) {
            session_start();
            $_SESSION['usuario']['id_usuario'] = $registro['id_usuario'];
            $_SESSION['usuario']['nome'] = $registro['nome'];
            $_SESSION['usuario']['email'] = $registro['email'];
            $_SESSION['usuario']['nivel_acesso'] = $registro['nivel_acesso'];
            $_SESSION['usuario']['foto'] = $registro['img_usuario'];
            header("Location: /front_vitrine/views/perfil.php");
            exit();
        } else {
            setcookie('msg', 'Email ou Senha Incorreto!', time() + 10, '/front_vitrine/');
            setcookie('tipo', 'perigo', time() + 10, '/front_vitrine/');

            header("Location: /front_vitrine/views/login.php");
            exit();
        }
    }
}
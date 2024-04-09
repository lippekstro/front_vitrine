-- aqui ficam as configuracoes de conexao com o banco e a estrutura dele

-- modelei uma aqui so pra funcionar
CREATE DATABASE front_vitrine;

CREATE TABLE usuarios(
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    img_usuario LONGBLOB,
    nivel_acesso INT DEFAULT 1
);
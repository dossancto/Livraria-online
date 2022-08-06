DROP DATABASE db_livraria;
CREATE DATABASE db_livraria
DEFAULT CHARACTER SET UTF8
DEFAULT COLLATE UTF8_GENERAL_CI;

USE db_livraria;

CREATE TABLE tbl_categoria
(
	cd_categoria INT PRIMARY KEY AUTO_INCREMENT,
    ds_categoria VARCHAR(25) NOT NULL
)
DEFAULT CHARSET UTF8;

CREATE TABLE tbl_autor
(
	cd_autor INT PRIMARY KEY AUTO_INCREMENT,
    nm_autor VARCHAR(45) NOT NULL
)
DEFAULT CHARSET UTF8;

CREATE TABLE tbl_livro
(
	cd_livro INT PRIMARY KEY AUTO_INCREMENT,
    no_isbn VARCHAR(17) NOT NULL,
    cd_categoria INT NOT NULL,
    nm_livro VARCHAR(70) NOT NULL,
    cd_autor INT NOT NULL,
    no_pag VARCHAR(4) NOT NULL,
    vl_preco DECIMAL(6,2) NOT NULL,
    qt_estoque INT NOT NULL,
    ds_resumo_obra TEXT NOT NULL,
    ds_capa VARCHAR(255) NOT NULL,
    sg_lancamento ENUM('S', 'N') NOT NULL,
    CONSTRAINT fk_cat FOREIGN KEY(cd_categoria) REFERENCES tbl_categoria(cd_categoria),
    CONSTRAINT fk_autor FOREIGN KEY(cd_autor) REFERENCES tbl_autor(cd_autor)
)
DEFAULT CHARSET UTF8;

INSERT INTO tbl_categoria(ds_categoria)
VALUES
('Design'),
('Infraestrutura'),
('Dados'),
('Front-End'),
('Mobile');

INSERT INTO tbl_autor (nm_autor)
VALUES
('Alexandre Aquíles'),
('Tárcio Zemel'),
('Rafael Steil'),
('Fabrício Texeira'),
('Vinícius Carvalho'),
('Fernando Baglio'),
('David Paniz'),
('Rosangela Marquesone'),
('Nathan Souza'),
('Danilo Sato'),
('Juliano Ramos'),
('Fernando Bryan Frizzarin'),
('Eduardo Popovici'),
('Adrian Gois'),
('Everton Coimbra de Araújo'),
('Sérgio Lopes'),
('Flávio Almeida'),
('Roger Silva');
USE db_livraria;

CREATE TABLE tbl_usuario
(
	cd_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nm_usuario VARCHAR(80) NOT NULL,
    ds_email VARCHAR(90) NOT NULL,
    ds_senha VARCHAR(14),
    ds_status BOOLEAN NOT NULL,
    ds_endereco VARCHAR(80) NOT NULL,
    ds_cidade VARCHAR(30) NOT NULL,
    no_CEP CHAR(9) NOT NULL
)
DEFAULT CHARSET UTF8;

insert into tbl_usuario
values
(default, "Orlindo omiya", 'orlindo@gmail.com', 'protetor', 1, 'Casa do Caralho', 'Santos', '05252-020'),
(default, "Janailson Matias", 'matias@gmail.com', 'janass', 0, 'Casa do Jaraguá', 'São Paulo', '00881-220'),
(default, "Olidio Junior", 'olidio@hotmail.com', 'etec22', 0, 'Pompeia', 'São Paulo', '05252-025');
USE db_livraria;

CREATE USER 'us_livraria'@'localhost' IDENTIFIED BY '123456';
GRANT ALL PRIVILEGES ON db_livraria.* TO 'us_livraria'@'localhost' WITH GRANT OPTION;

-- Apaga o usuário, vai que né
-- DROP USER 'us_livraria'@'localhost';
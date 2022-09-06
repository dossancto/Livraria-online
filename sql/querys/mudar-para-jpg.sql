/*
	ESTE ARQUIVO ADICIONA ".jpg" EM TODAS AS IMAGENS DA TABELA "tbl_livro",
    BASTA CRIAR A PROCEDURE E EXECUTAR AS CALLs
*/

use db_livraria;

DELIMITER //
create procedure sp_updateImages(p_id int)
begin
	DECLARE nm_img varchar(255);
    
    set nm_img := CONCAT((select ds_capa from tbl_livro where cd_livro = p_id), ".jpg");
	update tbl_livro
    set ds_capa = nm_img
    where cd_livro = p_id;
end
// 

select cd_livro, ds_capa from tbl_livro;

call sp_updateImages(1);
call sp_updateImages(2);
call sp_updateImages(3);
call sp_updateImages(4);
call sp_updateImages(5);
call sp_updateImages(6);
call sp_updateImages(7);
call sp_updateImages(8);
call sp_updateImages(9);
call sp_updateImages(10);
call sp_updateImages(11);
call sp_updateImages(12);
call sp_updateImages(13);
call sp_updateImages(14);


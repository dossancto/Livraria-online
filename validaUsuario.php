<?php

include 'sql/conexao.php';

$v_usuario = $_POST['txtemail'];
$v_senha = $_POST['txtsenha'];

// echo $v_usuario . '<br>';
// echo $v_senha;

$consulta = $connection->query("select cd_usuario, ds_email, ds_senha, ds_status, nm_usuario from tbl_usuario where ds_email = '$v_usuario' and ds_senha = '$v_senha' ");

if($consulta->rowCount() == 1){
  echo "Cadastrado";
}
else{
  echo 'Faça login antes';
}


?>

<?php

include 'sql/conexao.php';

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];
$endereco = $_POST['txtendereco'];
$cidade = $_POST['txtcidade'];
$cep = $_POST['txtcep'];

// /*
echo $nome . "<br>";
echo $email . "<br>";
echo $senha . "<br>";
echo $endereco . "<br>";
echo $cidade . "<br>";
echo $cep . "<br>";
// */

$consulta = $connection->query("select ds_email from tbl_usuario where ds_email = '$email'");
$existe_usuario = $consulta->rowCount() == 1;

if ($existe_usuario) {
} else {
}

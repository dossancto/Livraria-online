<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <?php
  include 'sql/conexao.php';
  $consulta = $connection->query("select * from vw_livro");
  $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

  echo $exibe['nm_livro'];
  echo '<br>';
  echo $exibe['vl_preco'];
  echo '<br>';
  echo $exibe['ds_categoria'];
  ?>

</body>

</html>

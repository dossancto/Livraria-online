<!doctype html>

<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Minha Loja</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <style>
    .navbar {
      margin-bottom: 0;
    }
  </style>



</head>

<body>

  <?php

  // session_start();

  include 'sql/conexao.php';
  include 'components/navbar.php';

  $cd_livro = $_GET['cd'];

  $consulta = $connection->query("SELECT * FROM vw_livro where cd_livro = '$cd_livro'");
  $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

  ?>

  <div class="container-fluid">



    <div class="row">

      <div class="col-sm-1"></div>
      <div class="col-sm-4 col-sm-offset-1">

        <h1>Detalhes do Produto</h1>

        <img src="img/<?php echo $exibe['ds_capa']; ?>.jpg" class="img-responsive" style="width:100%;">

        <!-- 
        <div class="col-sm-4 col-sm-offset-1" style="margin-top: 10px;">
          <img src="https://placehold.co/900x640" class="img-responsive">
        </div>

        <div class="col-sm-4 col-sm-offset-1" style="margin-top: 10px;">
          <img src="https://placehold.co/900x640" class="img-responsive">
        </div>
-->

      </div>


      <div class="col-sm-7">
        <h1><?php echo $exibe['nm_livro']; ?></h1>

        <p><?php echo $exibe['ds_resumo_obra'] ?></p>

        <p><b><?php echo $exibe['no_pag'] ?></b> Páginas</p>

        <p>Escrito Por: <b><?php echo $exibe['nm_autor'] ?></b></p>

        <p>ISBN: <b><?php echo $exibe['no_isbn'] ?></b></p>

        <p>R$ <b><?php echo number_format($exibe['vl_preco'], 2, ',', '.'); ?></b></p>

        <button class="btn btn-lg btn-success">Comprar</button>

      </div>



    </div>

    <?php

    include 'components/footer.html';
    ?>

</body>

</html>

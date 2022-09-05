<!doctype html>

<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Minha Loja</title>

  <meta name="viewport" content="width=device-width, incoial-scale=1">

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrcoy="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrcoy="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

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

  $pesquisa = $_GET["txtbuscar"];

  $consulta = $connection->query("select * from vw_livro where nm_livro like concat ('%', '$pesquisa', '%') OR nm_autor like concat ('%', '$pesquisa', '%')");



  ?>

  <div class="container-fluid">

    <?php
    while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {

    ?>
      <div class="row" style="margin-top: 15px;">

        <div class="col-sm-1"></div>

        <div class="col-sm-1">
          <img src="img/<?php echo $exibe['ds_capa'] ?>.jpg" class="img-responsive" style="width: 100%" />
        </div>

        <div class="col-sm-5">
          <h4 style="padding-top:20px"><?php echo $exibe['nm_livro'] ?></h4>
        </div>
        <div class="col-sm-2">
          <h4 style="padding-top:20px">R$ <?php echo number_format($exibe['vl_preco'], 2, ',', '.'); ?></h4>
        </div>
        <div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px">
          <a href="detalhesProd.php?cd=<?php echo $exibe['cd_livro']; ?>">
            <button class="btn btn-default btn-block" type="submit" style="color: cadetblue;">
              <span class="bi bi-info-circle-fill"> Detalhes</span>
            </button>
          </a>



        </div>

      </div>
    <?php
    }
    ?>



  </div>

  <?php

  include 'components/footer.html';

  ?>

</body>

</html>

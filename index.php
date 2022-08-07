<!DOCTYPE html>
<html lang="pt-br">

<head>

  <title>Livraria Online</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Jquery -->
  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>
  <?php
  include 'components/navbar.html';
  include 'components/jumbotron.html';
  include 'sql/conexao.php';
  $consulta = $connection->query('select nm_livro, ds_capa, vl_preco from vw_livro;');
  ?>


  <div class="container-fluid">
    <div class="row">
      <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="col-sm-3">
          <img src="img/<?php echo $exibe['ds_capa']; ?>.jpg" class="img-responsive" style="width: 100%">
          <div>
            <h5><?php echo mb_strimwidth($exibe['nm_livro'], 0, 30, '...'); ?></h5>
            <h6>R$ <?php echo number_format($exibe['vl_preco'], 2, ',', '.');?></h6>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <?php include 'components/footer.html' ?>
</body>

</html>

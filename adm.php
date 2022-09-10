<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Minha Loja - Logon de usu�rio</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

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

  include 'sql/conexao.php';
  include 'components/navbar.php';


  if (empty($_SESSION['status']) || $_SESSION['status'] != 1) {
    header("location:index.php");
  }

  ?>


  <div class="container-fluid">
    <div class="row text-center">
      <div class="col-sm-4 "></div>
      <div class="col-sm-4">
        <h2>Área administrativa</h2>


        <a href="formProduto.php">
          <button type="submit" class="btn btn-block btn-lg btn-primary mb-2" style="width: 100%;">

            Incluir Produto

          </button>

        </a>


        <a href="lista.php">
          <button type="submit" class="btn btn-block btn-lg btn-warning mb-2" style="width: 100%;">

            Alterar / Excluir Produto

          </button>
        </a>


        <button type="submit" class="btn btn-block btn-lg btn-success mb-2" style="width: 100%;">

          Vendas

        </button>



        <button type="submit" class="btn btn-block btn-lg btn-danger mb-2" style="width: 100%;">

          Sair da área administrativa

        </button>
      </div>
      <div class="col-sm-4">c</div>
    </div>

  </div>

  <?php include 'components/footer.html' ?>




</body>

</html>
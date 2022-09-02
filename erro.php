<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Minha Loja - Logon de usu�rio</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Jquery -->
  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<style>
  .espaco {
    padding-top: 150px;
  }
</style>

<body>

  <?php

  include 'sql/conexao.php';
  include 'components/navbar.php';

  ?>


  <div class="container-fluid espaco">

    <div class="row">

      <div class="text-center">

        <h2>Usuário ou senha Incorretos<h2>

        <a href="formLogon.php" class="btn btn-block btn-danger" role="button">Tentar Novamente</a>

        <button type="button" class="btn btn-link">

          Ainda não sou cadastrado

        </button>

      </div>
    </div>
  </div>

  <?php include 'components/footer.html' ?>




</body>

</html>

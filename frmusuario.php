<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Cadastro Usuario</title>

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <script defer src="jquery.mask.js"></script>

  <style>
    .navbar {
      margin-bottom: 0;
    }
  </style>

  <script>
    $(document).ready(() => {
      $("#cep").mask("00000-000");
    });
  </script>

</head>

<body>

  <?php

  include 'sql/conexao.php';
  include 'components/navbar.php';

  ?>


  <div class="container-fluid">

    <div class="row">
      <div class="col-sm-4"></div>

      <div class="col-sm-4">

        <h2>Cadastro de novo Cliente</h2>

        <form method="post" action="inserirUsuario.php" name="logon">

          <div class="form-group">

            <label for="nome">Nome</label>
            <input name="txtnome" type="text" class="form-control" required id="nome">
          </div>

          <div class="form-group">

            <label for="sobrenome">Sobrenome</label>
            <input name="txtsobrenome" type="text" class="form-control" required id="sobrenome">
          </div>


          <div class="form-group">

            <label for="email">E-mail</label>
            <input name="txtemail" type="email" class="form-control" required id="email">
          </div>


          <div class="form-group">

            <label for="senha">Senha</label>
            <input name="txtsenha" type="password" class="form-control" required id="senha">
          </div>

          <div class="form-group">

            <label for="endereco">Endereço</label>
            <textarea name="txtendereco" rows="5" class="form-control" required id="endereco"></textarea>
          </div>


          <div class="form-group">

            <label for="cidade">Cidade</label>
            <input name="txtcidade" type="text" class="form-control" required id="cidade">
          </div>


          <div class="form-group">

            <label for="cep">CEP</label>
            <input name="txtcep" type="text" class="form-control" required id="cep">
          </div>


          <button type="submit" class="btn btn-lg btn-default">

            <span class="glyphicon glyphicon-pencil"> Cadastrar</span>

          </button>

        </form>

      </div>
    </div>
  </div>

  <?php include 'components/footer.html' ?>
</body>

</html>

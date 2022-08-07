<!DOCTYPE html>
<html lang="en">

<head>
  <title>Logon</title>
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

  include 'sql/conexao.php';
  include 'components/navbar.html';
  include 'components/jumbotron.html';

  ?>


  <div class="container-fluid ">

    <div class="row">
      <div class="col-sm-4"></div>

      <div class="col-sm-4">

        <h2>Logon de Usuário</h2>
        <form method="POST" name="frmusuario" action="validaUsuario.php" >

          <div class="form-group">
            <label for="email">Email</label>
            <input name="txtemail" type="email" class="form-control" required id="email">
          </div>

          <div class="form-group my-4">

            <label for="senha">Senha</label>
            <input name="txtsenha" type="password" class="form-control" required id="senha">
          </div>


          <button type="submit" class="btn btn-default btn-outline-dark ">
            Entrar
          </button>

          <button type="submit" class="btn btn-link">
            Ainda não sou cadastrado
          </button>

        </form>
      </div>
    </div>
  </div>

  <?php include 'components/footer.html' ?>
</body>

</html>

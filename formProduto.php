<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Minha Loja - Logon de usuário</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrcoy="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrcoy="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <script src="jquery.mask.js"></script>

  <script>
    $(document).ready(function() {

      $('#txtpreco').mask('000.000.000.000.000,00', {
        reverse: true
      });
      $("#txtisbn").mask('000-00-000-0000-0');

    });
  </script>

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

  $consultaCategoria = $connection->query("select * from tbl_categoria");
  $consultaAutor = $connection->query("select * from tbl_autor");

  ?>


  <div class="container-fluid">

    <div class="row">

      <div class="col-sm-4"></div>
      <div class="col-sm-4">

        <h2 class="text-center">Inclusão de Livros</h2>

        <form method="post" action="insprod.php" name="incluiProd" enctype="multipart/form-data">

          <div class="form-group">

            <label for="txtisbn">ISBN</label>
            <input name="txtisbn" type="text" class="form-control" required id="txtisbn">
          </div>

          <div class="form-group">

            <label for="sltcat">Categoria</label>

            <select class="form-control" name="sltcat">
              <option value="">Selecione</option>
              <?php
              while ($listaCat = $consultaCategoria->fetch(PDO::FETCH_ASSOC)) {
                $cd_categoria = $listaCat['cd_categoria'];
                $ds_categoria = $listaCat['ds_categoria'];
                echo "<option value='$cd_categoria'>$ds_categoria</option>";
              }
              ?>
              
            </select>

          </div>

          <div class="form-group">

            <label for="txtlivro">Nome do Livro</label>
            <input name="txtlivro" type="text" class="form-control" required id="txtlivro">
          </div>

          <div class="form-group">
            <label for="sltautor">Autor</label>

            <select class="form-control" name="sltautor">
              <option value="">Selecione</option>
              <?php
              while ($listaAut = $consultaAutor->fetch(PDO::FETCH_ASSOC)) {
                $cd_autor = $listaAut['cd_autor'];
                $nm_autor = $listaAut['nm_autor'];
                echo "<option value='$cd_autor'>$nm_autor</option>";
              }
              ?>
            </select>

          </div>

          <div class="form-group">

            <label for="txtpag">Número de páginas</label>

            <input type="number" class="form-control" name="txtpag" required id="txtpag">

          </div>


          <div class="form-group">

            <label for="txtpreco">Preço</label>

            <input type="text" class="form-control" name="txtpreco" required id="txtpreco">

          </div>


          <div class="form-group">

            <label for="txtqtde">Quantidade em Estoque</label>

            <input type="number" class="form-control" name="txtqtde" required id="txtqtde">

          </div>


          <div class="form-group">

            <label for="txtresumo">Resumo da obra</label>

            <textarea rows="5" class="form-control" name="txtresumo"></textarea>


          </div>


          <div class="form-group">

            <label for="txtfoto1">Foto Principal</label>

            <input type="file" accept="image/*" class="form-control" name="txtfoto1" required id="txtfoto1">

          </div>

          <div class="form-group">

            <label for="sltlanc">Lançamento?</label>

            <select class="form-control" name="sltlanc">
              <option value="">Selecione</option>
              <option value="S">Sim</option>
              <option value="N">Não</option>
            </select>


          </div>


          <button type="submit" class="btn btn-lg btn-default">

            <span class="glyphicon glyphicon-pencil"> Cadastrar </span>

          </button>

        </form>

      </div>
    </div>
  </div>

  <?php include 'components/footer.html' ?>

</body>

</html>

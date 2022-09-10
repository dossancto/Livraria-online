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
        /* mscara para o preço */
        $(document).ready(function() {

            $('#preco').mask('000.000.000.000.000,00', {
                reverse: true
            });

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

    $cd = $_GET['id'];
    $cd2 = $_GET['id2'];
    $cd3 = $_GET['id3'];

    $consulta = $connection->query("SELECT * FROM tbl_livro WHERE cd_livro='$cd'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

    $consultaCat = $connection->query("SELECT cd_categoria, ds_categoria FROM tbl_categoria where cd_categoria='$cd2' union select cd_categoria, ds_categoria FROM tbl_categoria where cd_categoria !='$cd2'");

    $consultaAutor = $connection->query("SELECT cd_autor, nm_autor FROM tbl_autor where cd_autor='$cd3' union select cd_autor, nm_autor FROM tbl_autor where cd_autor !='$cd3'");

    ?>


    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                <h2>Alteração de produto</h2>

                <form method="post" action="alterarProduto.php?cd_altera=<?php echo $cd; ?>" name="incluiProd" enctype="multipart/form-data">

                    <div class="form-group">

                        <label for="txtisbn">Isbn</label>
                        <input type="text" name="txtisbn" value="<?php echo $exibe['no_isbn']; ?>" class="form-control" required id="txtisbn">
                    </div>

                    <div class="form-group">

                        <label for="sltcat">Categoria</label>

                        <select class="form-control" name="sltcat">
                            <?php
                            while ($exibecat = $consultaCat->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <option value="<?php echo $exibecat['cd_categoria']; ?>"><?php echo $exibecat['ds_categoria']; ?></option>;
                            <?php }    ?>
                        </select>
                    </div>

                    <div class="form-group">

                        <label for="txtlivro">Nome do Livro</label>
                        <input type="text" name="txtlivro" value="<?php echo $exibe['nm_livro']; ?>" class="form-control" required id="txtlivro">
                    </div>

                    <div class="form-group">

                        <label for="sltautor">Autor</label>

                        <select class="form-control" name="sltautor">
                            <?php
                            while ($exibeautor = $consultaAutor->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <option value="<?php echo $exibeautor['cd_autor']; ?>"><?php echo $exibeautor['nm_autor']; ?></option>;
                            <?php }    ?>
                        </select>
                    </div>


                    <div class="form-group">

                        <label for="txtpag">Número de páginas</label>

                        <input type="number" class="form-control" value="<?php echo $exibe['no_pag']; ?>" name="txtpag" required id="txtpag">

                    </div>

                    <div class="form-group">

                        <label for="preco">Preço</label>

                        <input type="text" class="form-control" required name="txtpreco" value="<?php echo $exibe['vl_preco']; ?>" id="preco">

                    </div>

                    <div class="form-group">

                        <label for="txtqtde">Quantidade em Estoque</label>

                        <input type="number" class="form-control" name="txtqtde" value="<?php echo $exibe['qt_estoque']; ?>" required id="txtqtde">

                    </div>

                    <div class="form-group">

                        <label for="txtresumo">Resumo da obra</label>

                        <textarea rows="5" class="form-control" name="txtresumo"><?php echo $exibe['ds_resumo_obra']; ?></textarea>


                    </div>

                    <div class="form-group">

                        <label for="txtfoto1">Foto Principal</label>

                        <input type="file" accept="image/*" class="form-control" name="txtfoto1" id="foto1">

                    </div>

                    <div class="form-group">

                        <img src="img/<?php echo $exibe['ds_capa']; ?>" width="100px">

                    </div>

                    <div class="form-group">

                        <label for="sltlanc">Lançamento?</label>

                        <select class="form-control" name="sltlanc">
                            <!-- se o sg_lancamento == S este valor estará selecionado senão vazio -->
                            <option value="S" <?= ($exibe['sg_lancamento'] == 'S') ? 'selected' : '' ?>>Sim</option>
                            <option value="N" <?= ($exibe['sg_lancamento'] == 'N') ? 'selected' : '' ?>>Não</option>
                        </select>


                    </div>

                    <button type="submit" class="btn btn-lg btn-default">

                        <span class="glyphicon glyphicon-pencil"> Alterar </span>

                    </button>

                </form>

            </div>
        </div>
    </div>

    <?php include 'components/footer.html' ?>

</body>

</html>
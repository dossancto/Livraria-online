<!doctype html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Minha Loja</title>

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


    $consulta = $connection->query("SELECT * from tbl_livro");


    ?>

    <div class="container-fluid">


        <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {

        ?>


            <div class="row" style="margin-top: 15px;">

                <div class="col-sm-1"></div>

                <div class="col-sm-1">
                    <img src="img/<?php echo $exibe['ds_capa']; ?>" class="img-responsive" style="width: 100%">
                </div>
                <div class="col-sm-5">
                    <h4 style="padding-top:20px"><?php echo $exibe['nm_livro']; ?></h4>
                </div>
                <div class="col-sm-2" style="padding-top:20px">


                    <a href="frmAlterar.php?id=<?php echo $exibe['cd_livro']; ?>&id2=<?php echo $exibe['cd_categoria']; ?>&id3=<?php echo $exibe['cd_autor']; ?>">
                        <button class="btn btn-lg btn-block btn-default">
                            <!-- TOOD: Adicionar um icone aqui -->
                            <span class="glyphicon glyphicon-pencil"> Alterar</span>
                        </button>
                    </a>
                </div>

                <div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px">
                    <a href="excluir.php?id=<?php echo $exibe['cd_livro']; ?>">
                        <button class="btn btn-lg btn-block btn-danger">
                            <span class="glyphicon glyphicon-remove"> Excluir</span>
                        </button>
                    </a>


                </div>

            </div>


        <?php } ?>



    </div>

    <?php

    include 'components/footer.html';

    ?>

</body>

</html>
<!doctype html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Minha Loja</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Jquery -->
    <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>

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



    include 'components/navbar.php';
    include 'sql/conexao.php';

    // verificando se usuário está logado
    if (empty($_SESSION['ID'])) {
        header('location:logon.php'); // enviando para formlogon.php
    }
    // verificando se o codigo do produto NÃO está vazio
    if (!empty($_GET['cd'])) {

        // inserindo o código do produto na variável $cd_prod
        $cd_prod = $_GET['cd'];

        // se a sessão carrinho não estiver preenchida(setada)
        if (!isset($_SESSION['carrinho'])) {
            // será criado uma sessão chamado carrinho para receber um vetor
            $_SESSION['carrinho'] = array();
        }



        // se a variavel $cd_prod não estiver setado(preenchida)
        if (!isset($_SESSION['carrinho'][$cd_prod])) {

            // será adicionado um produto ao carrinho
            $_SESSION['carrinho'][$cd_prod] = 1;
        }

        // caso contrario, se ela estiver setada, adicione novos produtos
        else {
            $_SESSION['carrinho'][$cd_prod] += 1;
        }
        // incluindo o arquivo 'mostraCarrinho.php'
        include 'mostraCarrinho.php';
    } else {

        //mostrando o carrinho	vazio	
        include 'mostraCarrinho.php';
    }

    ?>

    <!-- exibindo o valor da variavel total da compra -->
    <div class="row text-center" style="margin-top: 15px;">
        <h1>Total: R$ <?php echo number_format($total, 2, ',', '.'); ?> </h1>
    </div>


    <div class="row text-center" style="margin-top: 15px;">
        <a href="index.php"><button class="btn btn-lg btn-primary mb-4">Continuar Comprando</button></a>
        <a href="finalizarCompra.php"><button class="btn btn-lg btn-success">Finalizar Compra</button></a>
    </div>


    </div>


    <?php

    include 'components/footer.html';

    ?>

</body>

</html>
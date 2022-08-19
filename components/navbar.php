<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./">Books Online</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./lancamentos.php">Lançamentos</a>
        </li>
        <li class="nav-item dropdown me-4">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./categorias.php?cat=Design">Design</a></li>
            <li><a class="dropdown-item" href="./categorias.php?cat=Infraestrutura">Infra Estrutura</a></li>
            <li><a class="dropdown-item" href="./categorias.php?cat=Dados">Banco de dados</a></li>
            <li><a class="dropdown-item" href="./categorias.php?cat=Front-end">Front-End</a></li>
            <li><a class="dropdown-item" href="./categorias.php?cat=Mobile">Mobile</a></li>
          </ul>
        </li>
        <form class="d-flex" role="search">
          <input class="form-control me-4" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn" type="submit">Pesquisar</button>
        </form>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
        <li class="nav-item">
          <?php

          session_start();

          if (empty($_SESSION["ID"])) {
            echo "<a class='nav-link' href='./logon.php'> <span class=1bi bi-box-arrow-in-right1> Logon</span></a>";
          } else {
            $opa = $_SESSION["ID"];
            $id_usr = "id";
            $consulta_usuario = $connection->query("select nm_usuario from tbl_usuario where cd_usuario = " . $_SESSION['ID']);
            $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);

            echo "<li class='nav-item'><a href='#' class='nav-link'><span> " . $exibe_usuario['nm_usuario'] . "&nbsp </span></a></li>";
            echo "<a class='nav-link' href='./sair.php'> ";
            echo " Logout ";
            echo "<span class='bi bi-box-arrow-in-right'></span></a>";
          }
          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>

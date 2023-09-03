<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de Cadastro</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="../css/css_php/bulma.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/css_php/login.css">
  <link rel="stylesheet" href="../css/css/bootstrap.css">
  <link rel="stylesheet" href="../css/css_php/style.css">
  <script src="../css/js/bootstrap.js"></script>
  <script src="../css/js/bootstrap.bundle.js"></script>

</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #C9586C;">
      <div class="container-fluid">
        <a class="navbar-brand" href="../home/index.php">Get Services</a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item"></li>
          </ul>
          <div class="btn-group dropstart ">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
              <img src="../css/imgs/user.png" alt="" width="30px">
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="../login/login.php">Entrar</a></li>
              <li><a class="dropdown-item" href="../pagina_cadastro/cadastro.php">Cadastrar</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  [
  <!-- Fim Navegação -->
  <section class="hero is-success is-fullheight" style="background-color: black;">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
          <h3 class="title has-text-white" style="font-size: 36px;">GetServices</h3>
          <h3 class="has-text-white">Entrar como: </h3>

          <a href="index_clientes.php"><button type="submit" class="button is-block is-link is-large is-fullwidth" style="background-color: #C9586C;">Cliente</button></a> <br>
          <a href="index_prestador.php"><button type="submit" class="button is-block is-link is-large is-fullwidth" style="background-color: #C9586C;">Prestador</button></a>
        </div>
      </div>
    </div>
    <footer class="container">
        <hr class="featurette-divider text-white">
        <p><a class="float-end btn btn-outline-light" style="background-color: #C9586C;" href="#">Ir ao topo</a></p>
        <p style="color: #c9596c;">&copy; 2022 - Services, Get. &middot; <a href="#" style="color: #c9596c;">Privacy</a> &middot; <a href="#" style="color: #c9596c;">Terms</a></p>
    </footer>
  </section>

</body>

</html>
<?php
session_start();
include('../conexao/conexao.php');
include('../logout/verifica_login.php');
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GetServices</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <link rel="stylesheet" href="../css/css/bootstrap.css">
  <link rel="stylesheet" href="../css/css_php/style.css">
  <script src="../css/js/bootstrap.js"></script>
  <script src="../css/js/bootstrap.bundle.js"></script>

</head>

<body>

  <!-- Navegação -->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: black;">
      <div class="container-fluid">
        <a class="navbar-brand" href="..//home/index.php">Get Services</a>
        <a class="navbar-brand">Bem vindo <?php echo $_SESSION['user']?></a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item"></li>
          </ul>
          <div class="btn-group dropstart ">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
              <img src="../css/imgs/user.png" alt="" width="30px">
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="../perfil/meu_perfil/perfil_prest.php">Meu Perfil</a></li>
              <li><a class="dropdown-item" href="../logout/logout.php">Sair</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
<!-- Fim Navegação -->


  <main>

    <!-- Inicio barra de pesquisa -->
    <div class="container py-5">
      <div class="col-12 py-5" style="float: left; padding-top: 3%; margin-right: 1%;">
        <h2>Listagem de prestadores</h2><br>
        <form class="d-flex" role="search">
          <input class="form-control form-control-lg me-2" type="search" name="pesquisa" placeholder="Filtrar por Profissão" aria-label="Pesquisar">
          <button style="background-color: #C9586C;" class="btn btn-outline-light" type="submit">Pesquisar </button>
        </form>
      </div>

      <?php

      if(isset($_GET['pesquisa']) == NULL) {

      $sql_code = "SELECT * FROM prestador_servicos ORDER BY profissao ASC";
      $result = mysqli_query($conexao, $sql_code);

      while ($row = $result->fetch_row()) {

        ?>
      <!-- Fim barra de pesquisa -->

      <!-- Inicio area de informações prestador-->
      <form action="../perfil/prestador/index.php" method="POST" name="identificador">
      <div class="row">
        <div class="col-lg-12 my-1 p-5 border border-outline-white rounded-5">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>
          <div class="col-10" name="informacoes" style="float: right; padding-right: 35%;">
          <div class="field">
            <div class="control">
              <input name="id" type="text" value="<?php echo "$row[0]"?>" style="display: none;"class="input is-large">
             </div>
            </div>
            <h3 style="color: silver;" name="nome">Nome: <?php echo "$row[3]"; ?></h3>
            <h3 style="color: silver" name="profissao">Profissão: <?php echo "$row[9]"; ?></h3>
            <h3 style=" margin-bottom: 3%; color: silver" name="carreira">Carreira: <?php echo "$row[10]"; ?></h3>
            <h3 style=" margin-bottom: 3%; color: silver" name="celular">Telefone: (<?php echo "$row[13]"?>) <?php echo "$row[5]"; ?> </h3>
            <p>
              <button type="submit" class="btn btn-lg btn-outline-light" style="background-color: #C9586C;" href="../perfil/prestador/index.php">Mais Informações</button>
              </p>
          </h3>

          </form>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          </div>
        </div><br>
        
        <?php
              }
      } else {

      $pesquisa_prof = mysqli_real_escape_string($conexao, $_GET['pesquisa']);

        $sql_code = "SELECT nome, profissao, carreira, celular, email, id, ddd
                     FROM prestador_servicos WHERE profissao LIKE '%".$pesquisa_prof."%'";

      $result = mysqli_query($conexao, $sql_code);

      
      while ($row = $result->fetch_row()) {

        ?>
      <!-- Fim barra de pesquisa -->

      <!-- Inicio area de informações prestador-->
      <form action="../perfil/prestador/index.php" method="POST" id="<?php $row[5]?>">
      <div class="row">
        <div class="col-lg-12 my-1 p-5 border border-outline-white rounded-5">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>
          <div class="col-10" name="informacoes" style="float: right; padding-right: 35%;">
          <div class="field">
            <div class="control">
              <input name="id" type="text" value="<?php echo "$row[5]"?>" style="display: none;"class="input is-large">
             </div>
            </div>
            <h3 style="color: silver;" name="nome">Nome: <?php echo "$row[0]"; ?></h3>
            <h3 style="color: silver" name="profissao">Profissão: <?php echo "$row[1]"; ?></h3>
            <h3 style=" margin-bottom: 3%; color: silver" name="carreira">Carreira: <?php echo "$row[2]"; ?></h3>
            <h3 style=" margin-bottom: 3%; color: silver" name="celular">Telefone: (<?php echo "$row[6]"?>) <?php echo "$row[3]"; ?></h3>
            <p>
              <button type="submit" class="btn btn-lg btn-outline-light" style="background-color: #C9586C;" href="../perfil/prestador/index.php">Mais Informações</button>
              </p>
          </form>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          </div>
        </div><br>
        
        <?php
              }
            } mysqli_close($conexao);
      ?>
        

    
  </main>
  <!-- Rodapé -->
  <footer class="container">
            <hr class="featurette-divider">
            <p><a class="float-end btn btn-outline-light fs-5" style="background-color: #C9586C;" href="#">Voltar ao
                    topo</a></p>
            <p style="color: #c9586c">&copy; 2022 - Services, Get.  <a href="#" style="color: #c9586c">Privacy</a> <a href="#" style="color: #c9586c">Terms</a></p>
        </footer>
  <!-- Fim Rodapé -->

  <script src="js/bootstrap.bundle.min.js"> </script>

</body>

</html>
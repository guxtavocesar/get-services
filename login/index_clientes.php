<?php
session_start();
session_destroy();
include('../conexao/conexao.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login</title>
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
    <!-- Fim Navegação -->

    <section class="hero is-success is-fullheight" style="background-color: black;">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-white" style="font-size: 36px;">GetServices</h3>
                    <h3 class="has-text-white">Entre como <span class="title">Cliente</span></h3>
                    <?php
                    if (isset($_SESSION['nao_autenticado'])) :
                    ?>
                        <div class="notification is-danger">
                            <p>ERRO: Usuário ou senha inválidos.</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="login_clientes.php" method="POST">
                            <label for="email" style="float: left; font-size: 20px;">E-mail</label>
                            <div class="field">
                                <div class="control">
                                    <input name="email" type="email" class="input is-large" placeholder="E-mail">
                                </div>
                            </div>
                            <label for="email" style="float: left; font-size: 20px;">Senha</label>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>

                            <div class="field" style="font-size: 16px;">
                                <a href="../pagina_cadastro/cadastro.php">Cadastrar</a>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth" style="background-color: #C9586C;">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="container">
            <hr class="featurette-divider">
            <p><a class="float-end btn btn-outline-light fs-5" style="background-color: #C9586C;" href="#">Voltar ao
                    topo</a></p>
            <p style="color: #c9586c">&copy; 2022 - Services, Get.  <a href="#" style="color: #c9586c">Privacy</a> <a href="#" style="color: #c9586c">Terms</a></p>
        </footer>
    </section>


</body>

</html>
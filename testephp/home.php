<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Style CSS-->
    <link rel="stylesheet" href="./css/style.css">

    <!--Fonte Awesome-->
    <link rel="stylesheet" href="./fontawesome/css/all.css">

    <!--Iconic CSS-->
    <link href="iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    

    <title>Teste PHP</title>
    <?php
        //conexão
        require_once 'conexao/db_connect.php';

        //session
        session_start();

        //verificcação logado:
        if(!isset($_SESSION['logado'])){
            header('location: index.php');
        }

        //dados do user:
        $id = $_SESSION['id_usuario'];
        $sql = "SELECT * FROM usuarios WHERE id ='$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
        mysqli_close($connect);
       
    ?>
  </head>
  <body id="home" style="background: #e9ecef;">
    <header><!--inicio cabeçalho-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#284b63;">
        <!-- Logo -->
        <a href="#" class="navbar-brand">Sistema de Gestão</a>

        <!-- Menu Hamburguer -->
        <button class="navbar-toggler" data-toggle="collapse" 
        data-target="#navegacao">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- navegacao -->  
        <div class="collapse navbar-collapse" id="navegacao">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item text-white">
                    <a href="#" class="nav-link text-white Home"><span class="oi oi-home"> </span> Home</a>
                </li>
                
                <li class="nav-item text-white">
                    <a href="./pages/escolas.php" class="nav-link text-white escola"><span class="oi oi-people"></span>  Escolas</a>
                </li>
                
                <li class="nav-item text-white">
                    <a href="./pages/professores.php" class="nav-link text-white professores"><span class="oi oi-person"></span>  Professores</a>
                </li>


                <li class="nav-item text-white">
                    <a href="./pages/turmas.php" class="nav-link text-white turmas"><span class="oi oi-spreadsheet"></span> Turmas</a>
                </li>

                <li class="nav-item text-white">
                    <a href="logout.php" class="nav-link text-white"><span class="oi oi-power-standby"></span> sair</a>
                </li>
            </ul>
        </div>


        </nav><!--fim nav-->

    </header><!--fim cabeçalho-->
 
    <main> <!--inicio principal-->

        <div class="container jumbotron ">
            <div class="row">
                <div class="col-12 text-center my-5">
                    <h1 class="display-2">Seja Bem-Vindo</h1>
                    <h3 class="display-4 text-right">Educando com possibilidades!</h3>
                    <p class="lead text-right">
                        CNPJ: 2334556778
                    </p>
                </div>
            </div>
        </div>
    </main> <!--fim principal -->

    <footer class="bg-dark">
       <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Telefones</h4>
                    <ul class="navbar-nav">
                        <li>
                            (11) 91234-6789
                        </li>
                        <li>
                            (99) 90987-8907
                        </li>
                        <li>
                            (99) 91234-6789
                        </li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h4>Redes Sociais</h4>
                    <ul class="navbar-nav">
                        <li>
                            <a href="" class="text-white"><i class="fa-brands fa-facebook text-white"></i> Facebook</a>
                        </li>
                        <li>
                            <a href="" class="text-white"><i class="fa-brands fa-instagram text-white"></i> instagram</a>
                        </li>
                        <li>
                            <a href="" class="text-white"><i class="fa-brands fa-twitter text-white"></i> Twitter</a>
                        </li>
                        <li>
                            <a href="" class="text-white"><i class="fa-brands fa-youtube text-white"></i> Youtube</a>
                        </li>
                    </ul>
                </div>

                
            </div>
       </div>
    </footer>

  </body>
</html>
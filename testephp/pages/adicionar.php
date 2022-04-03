<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professores - Adicionar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Fonte Awesome-->
    <link rel="stylesheet" href="../fontawesome/css/all.css">

     <!--Iconic CSS-->
     <link href="../iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">

</head>
<body style="background: #e9ecef;">
    <header><!--inicio cabeçalho-->

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#284b63;">
      <!-- Logo -->
      <a href="" class="navbar-brand">Sistema de Gestão</a>

     <!-- Menu Hamburguer -->
     <button class="navbar-toggler" data-toggle="collapse" 
     data-target="#navegacao">
        <span class="navbar-toggler-icon"></span>
     </button>

     <!-- navegacao -->  
     <div class="collapse navbar-collapse" id="navegacao">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item text-white">
                <a href="../home.php" class="nav-link text-white home"><span class="oi oi-home"> </span> Home</a>
            </li>

            <li class="nav-item text-white">
                <a href="../pages/escolas.php" class="nav-link text-white escolas"><span class="oi oi-people"></span>  Escolas</a>
            </li>
                
            <li class="nav-item text-white">
                <a href="../pages/professores.php" class="nav-link text-white professores"><span class="oi oi-person"></span>  Professores</a>
            </li>


            <li class="nav-item text-white">
                <a href="../pages/turmas.php" class="nav-link text-white turmas"><span class="oi oi-spreadsheet"></span> Turmas</a>
            </li>

            <li class="nav-item text-white">
                <a href="../logout.php" class="nav-link text-white"><span class="oi oi-power-standby"></span> sair</a>
            </li>
        </ul>
     </div>
     </nav><!--fim nav-->
   </header><!--fim cabeçalho-->

    <main>
        <div class="row">
            <div class="col-6 m-auto">
                <h3 class="light display-4">Novo Professor:</h3> 
                <form action="./create.php" method="POST" class="form-control">

                    <div class="input-field col-12">
                        <label for="professor">Nome:
                            <input class="form-control mb-1" type="text" name="professor">
                        </label>
                    </div>

                    <div class="input-field col-12">
                        <label for="cpf">CPF:
                            <input class="form-control mb-1" type="text" name="cpf">
                        </label>
                    </div>
                    <a href="./professores.php" class="btn btn-primary mr-5">Voltar</a>
                    <button type="submit" name="btn-professor" class="btn btn-success ml-5">Cadastrar</button>
                </form>
            </div>  
        </div>
    </main>

</body>
</html>
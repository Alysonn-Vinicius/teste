<?php
//conexao
require_once '../conexao/db_crud.php';

//select
if(isset($_GET['id'])){
    $id = mysqli_escape_string($crud, $_GET['id']);
    $sql = "SELECT * FROM escola WHERE id = '$id'";
    $resultado = mysqli_query($crud, $sql);
    $escola = mysqli_fetch_array($resultado);  
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolas - Editar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Fonte Awesome-->
    <link rel="stylesheet" href="./fontawesome/css/all.css">

    <!--Iconic CSS-->
    <link href="iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">

</head>
<body>
    <header><!--inicio cabeçalho-->

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#284b63;">
      <!-- Logo -->
      <a href="" class="navbar-brand">Logo Escolar</a>

     <!-- Menu Hamburguer -->
     <button class="navbar-toggler" data-toggle="collapse" 
     data-target="#navegacao">
        <span class="navbar-toggler-icon"></span>
     </button>

     <!-- navegacao -->  
     <div class="collapse navbar-collapse" id="navegacao">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="../home.php" class="nav-link"><span class="oi oi-home"> </span> Home</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Sobre</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link"><span class="oi oi-person"></span> conta</a>
            </li>
            <li class="nav-item">
                <a href="../logout.php" class="nav-link"><span class="oi oi-power-standby"></span> sair</a>
            </li>
        </ul>
     </div>
     </nav><!--fim nav-->
   </header><!--fim cabeçalho-->

    <main>
        <div class="row">
            <div class="col-6 m-auto">
                <h3 class="light">Editar Escola</h3>
                <form action="./uptade.php" method="POST" class="form-control">
                    <input type="hidden" name="id" value="<?php echo $escola['id'];?>">
                    <div class="input-field col-12">
                        <label for="professor">Nome:
                            <input class="form-control" type="text" value="<?php echo $escola['nome'];?>" name="nome">
                        </label>
                    </div>

                    <div class="input-field col-12">
                        <label for="cnpj">cnpj:
                            <input class="form-control" type="text"value="<?php echo $escola['cnpj'];?>" name="cnpj">
                        </label>
                    </div>

                    <div class="input-field col-12">
                        <label for="uf">uf:
                            <input class="form-control" type="text"value="<?php echo $escola['uf'];?>" name="uf">
                        </label>
                    </div>
                    <a href="./escolas.php" class="btn btn-primary mr-5">Voltar</a>
                    <button type="submit" name="btn-editar-escola" class="btn btn-success ml-5 text-white">Atualizar</button>
                </form>
            </div>  
        </div>
    </main>

</body>
</html>
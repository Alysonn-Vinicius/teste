<?php
if(isset($_SESSION['mensagem'])){
    echo $_SESSION['mensagem'];
}
//session
session_unset();

//conexao
include_once '../conexao/db_crud.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolas</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Fonte Awesome-->
    <link rel="stylesheet" href="../fontawesome/css/all.css">

     <!--Iconic CSS-->
     <link href="../iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
     
     <!--link css-->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body id="home" style="background: #e9ecef;">
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
        <ul class="navbar-nav ml-auto" data-toggle="collapse">
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

   <main> <!--inic principal-->
        <!--tabelas professores:-->
        <div class="row">
            <div class="col-6 m-auto bg-light">
                <div class="table-responsive">
                    <h3 class="display-4">Escolas</h3> <br>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nome:</th>
                                <th>CNPJ:</th>
                                <th>UF:</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM escola";
                            $resultado = mysqli_query($crud, $sql);
                            while($escolas = mysqli_fetch_array($resultado)){
                            ?>
                            <tr>
                                <td class="text-dark"><?php echo $escolas['nome']?></td>
                                <td><?php echo $escolas['cnpj']?></td>
                                <td><?php echo $escolas['uf']?></td>

                                <td><a href="editarescola.php?id=<?php echo $escolas['id'];?>" class="btn btn-warning text-white"><i class="fa-solid fa-pencil"></i></a></td>

                                <td>
                                    <form action="delete.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $escolas['id'];?>">
                                        <button  type="submit" class="btn btn-danger text-white" id="btn-delete" onclick="btnDeletar()" name="btn-delete-escola">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>
                                <script>
                                    var nome = document.getElementById("btn-delete");
                                    function btnDeletar(){
                                        window.confirm("Deletar esse Cadastro ?");
                                    }
                                </script>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <br>
                    <a href="./adicionarescola.php" class="btn btn-success">Adicionar Escola</a>
                </div>
            </div>
        </div>

   </main>  <!--fim principal-->

   
</body>
</html>
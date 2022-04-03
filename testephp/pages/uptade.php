<?php
//session
session_start();

//conexão db
require_once '../conexao/db_crud.php';

if(isset($_POST['btn-editar-prof'])){ 
    $professor = mysqli_escape_string($crud, $_POST['professor']);
    $cpf = mysqli_escape_string($crud, $_POST['cpf']);

    $id = mysqli_escape_string($crud, $_POST['id']);
    


    $sql = "UPDATE professores SET nome = '$professor', cpf = '$cpf' WHERE id = '$id'";

    //verf enviou;
    if(mysqli_query($crud, $sql)){
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('location: professores.php?sucesso');
    } else{
        $_SESSION['mensagem'] = "Erro ao Atualizar!";
        header('location: professores.php?erro');
    }

}
//editar turma
if(isset($_POST['btn-editar-turma'])){ 
    $turma = mysqli_escape_string($crud, $_POST['turma']);
    $escola = mysqli_escape_string($crud, $_POST['escola']);
    $status = mysqli_escape_string($crud, $_POST['status']);

    $id = mysqli_escape_string($crud, $_POST['id']);
    


    
    $sql = "UPDATE turmas SET nome = '$turma', escola = '$escola', status = '$status' WHERE id = '$id'";

    //verf enviou;
    if(mysqli_query($crud, $sql)){
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('location: turmas.php?sucesso');
    } else{
        $_SESSION['mensagem'] = "Erro ao Atualizar!";
        header('location: turmas.php?erro');
    }

}
//uptde escola
if(isset($_POST['btn-editar-escola'])){ 
    $escola = mysqli_escape_string($crud, $_POST['nome']);
    $cnpj = mysqli_escape_string($crud, $_POST['cnpj']);
    $uf = mysqli_escape_string($crud, $_POST['uf']);

    $id = mysqli_escape_string($crud, $_POST['id']);
    


    $sql = "UPDATE escola SET nome = '$escola', cnpj = '$cnpj', uf = '$uf' WHERE id = '$id'";

    //verf enviou;
    if(mysqli_query($crud, $sql)){
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('location: escolas.php?sucesso');
    } else{
        $_SESSION['mensagem'] = "Erro ao Atualizar!";
        header('location: escolas.php?erro');
    }

}
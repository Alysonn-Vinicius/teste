<?php
//session
session_start();

//conexão db
require_once '../conexao/db_crud.php';

if(isset($_POST['btn-delete'])){ 

    $id = mysqli_escape_string($crud, $_POST['id']);
    


    //modelo: (id, professor, sobrenome, cpf, status, escola, turma, nome_escola, uf)
    //inserir no db:
    $sql = "DELETE FROM professores WHERE id = '$id'";

    //verf enviou;
    if(mysqli_query($crud, $sql)){
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('location: professores.php?sucesso');
    } else{
        $_SESSION['mensagem'] = "Erro ao Deletar!";
        header('location: professores.php?erro');
    }

}
//delete escola
if(isset($_POST['btn-delete-escola'])){ 

    $id = mysqli_escape_string($crud, $_POST['id']);
    


    //m
    $sql = "DELETE FROM escola WHERE id = '$id'";

    //verf enviou;
    if(mysqli_query($crud, $sql)){
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('location: escolas.php?sucesso');
    } else{
        $_SESSION['mensagem'] = "Erro ao Deletar!";
        header('location: escolas.php?erro');
    }

}
// delete turma
if(isset($_POST['btn-delete-turma'])){ 

    $id = mysqli_escape_string($crud, $_POST['id']);
    


    //m
    $sql = "DELETE FROM turmas WHERE id = '$id'";

    //verf enviou;
    if(mysqli_query($crud, $sql)){
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('location: turmas.php?sucesso');
    } else{
        $_SESSION['mensagem'] = "Erro ao Deletar!";
        header('location: turmas.php?erro');
    }

}
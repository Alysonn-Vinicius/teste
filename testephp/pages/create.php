<?php
//session
session_start();

//conexão db
require_once '../conexao/db_crud.php';

if(isset($_POST['btn-professor'])){ 
    $professor = mysqli_escape_string($crud, $_POST['professor']);
    $cpf = mysqli_escape_string($crud, $_POST['cpf']);
    


    //modelo: (id, professor, sobrenome, cpf, status, escola, turma, nome_escola, uf)
    //inserir no db:
    $sql = "INSERT INTO professores (`id`, `nome`, `cpf`) VALUES (NULL,'$professor', '$cpf')";

    //verf enviou;
    if(mysqli_query($crud, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('location: professores.php?sucesso');
    } else{
        $_SESSION['mensagem'] = "Erro ao Cadastrar!";
        header('location: professores.php?erro');
    }

} 
//creat escola
if(isset($_POST['btn-escola'])){ 
    $escola = mysqli_escape_string($crud, $_POST['nome']);
    $cnpj = mysqli_escape_string($crud, $_POST['cnpj']);
    $uf = mysqli_escape_string($crud, $_POST['uf']);
    


    //modelo: (id, professor, sobrenome, cpf, status, escola, turma, nome_escola, uf)
    //inserir no db:
    $sql = "INSERT INTO escola (`id`, `nome`, `cnpj`,`uf`) VALUES (NULL,'$escola', '$cnpj', '$uf')";

    //verf enviou;
    if(mysqli_query($crud, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('location: escolas.php?sucesso');
    } else{
        $_SESSION['mensagem'] = "Erro ao Cadastrar!";
        header('location: escolas.php?erro');
    }

}
//create turma
if(isset($_POST['btn-turma'])){ 
    $turma = mysqli_escape_string($crud, $_POST['turma']);
    $escola = mysqli_escape_string($crud, $_POST['escola']);
    $status = mysqli_escape_string($crud, $_POST['status']);


    //
    $sql = "INSERT INTO turmas (`id`, `nome`, `escola`, `status`) VALUES (NULL, '$turma', '$escola', '$status')";

    //verf enviou;
    if(mysqli_query($crud, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('location: turmas.php?sucesso');
    } else{
        $_SESSION['mensagem'] = "Erro ao Cadastrar!";
        header('location: turmas.php?erro');
    }

}
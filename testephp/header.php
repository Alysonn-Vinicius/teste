
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema Gestão</title>
    <style>
    :root{
        --cor01:#1d3557;
        --cor02:#457b9d;
        --cor03:#a8dadc;
        --cor04:#f1faee;
        --cor05:#e63946;
        --cor06:#FFDAA3;
        --cor07:#F5F5EF; 
        --cor08:#ddd9ce;
    }
    body{
    background-image: linear-gradient(to bottom, #1d3557, #457b9d);
    background-repeat: no-repeat;
    background-attachment: fixed;
    }
    #container{
    width: 400px;
    height: 325px;
    background-color: var(--cor08);
    /*rgba(255, 255, 255, 0.3);*/
    border-radius: 10px;
    margin: 0 auto;
    margin-top: 120px;
    text-align: center;
    }
    input{
        height:40px;
        width:80%;
        font-size:18px;
        margin-bottom:10px;
        background-color: #fff;
        padding-left: 40px;
        border: none;
    }
    input.email{
        background-image: url(img/icone-usuario.png);
        background-repeat: no-repeat;
        background-position: 10px;
    }
    input.senha{
        background-image: url(img/icone-cadeado.png);
        background-repeat: no-repeat;
        background-position: 10px;
    }
    button{
        height: 40px;
        width: 75%;
        text-align:center;
        font-size:18px;
        background: #fff;
        border:none;
    }
    button:active{
        background: var(--cor01);
        color:white;
    }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
</head>
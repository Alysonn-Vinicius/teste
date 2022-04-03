<?php

//informações do banco:
$servername = "localhost";
$usarname = "root";
$password = "";
$db_name = "crud";

//fznd conexão
$crud = mysqli_connect($servername, $usarname, $password, $db_name);

if(mysqli_connect_error()){
    echo "falha na conexão com: ".mysqli_connect_error();
} else{
   
}
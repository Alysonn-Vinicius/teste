<?php

//conexão c/banco:
require_once './conexao/db_connect.php';

//session
session_start();

//verific botão
if(isset($_POST['logar-form'])){
    $erros = array();

    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    //verif de campos:
    if(empty($login) or empty($senha)){
        $erros[] = "<li> O campo usuario/senha precisa ser preenchido </li>";
    }else{
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);
         


        //verficação da existencia no banco:
        if(mysqli_num_rows($resultado) > 0){
            
            //verf da senha:
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);
            
                if(mysqli_num_rows($resultado) == 1){
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header("location: home.php");
                }else{
                    $erros[] = "<li>Usuario e senha não conferem!</li>";
                }
        }else{
            $erros[] = "<li> Usúario inexistente </li>";
        }
    }
}

include_once 'header.php';
?>
<body>
    <main>
        <div id="container">
            <h1 class="display-6 text-dark pt-1">Gestão Escolar</h1>
            <!--formulário-->
            <form action= "<?php echo $_SERVER['PHP_SELF'];?> " method="POST">
                <div class="inputs" style="padding: 15px 0 10px 0;">
                    <input class="email for" type="text" name="login" id="login" placeholder="Digite seu usuário">
                </div>

                <div style="margin-bottom: 15px; margin-top:10px;">
                    <input class="senha" type="password" name="senha" id="senha" placeholder="Digite sua senha">
                </div>

                <div style="margin-bottom: 15px; margin-top:10px;">
                    <button type="submit" class="btn btn-outline-primary" name="logar-form">Acessar</button>
                </div>
                
                <div class="mt-1" style="margin-top:10px;">
                    <small><a href="#" class="read text-sm">Esqueceu a senha?/primeiro acesso</a></small>
                </div>
                <?php
                if(!empty($erros)){
                    foreach($erros as $erro){
                        echo "<hr>".$erro;
                    }
                }
                ?>
            </form>
            <!--fim formulário-->

            
        </div>
        
    </main>
</body>
</html>
?>
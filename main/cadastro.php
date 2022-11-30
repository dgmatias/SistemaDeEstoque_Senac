<?php

session_start();
ob_start();

require 'config.php';

if(isset($_SESSION['id'])){
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/cadastro.css">
    <link rel="stylesheet" href="./static/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <title> Cadastro </title>
</head>
<body>

    <div id="grid-container">

        <div id="left-container">

            <div> <h1 id="h1-left"> Cadastro </h1> </div>

            <div id="form-container">

                <form id="form-content" action="cadastro_action.php" method="post">
                    
                    <label for="">
                        Nome: <br>
                    </label>

                    <input class="input-form" type="text" name="nome">  <br>  <br>

                    <label for="">
                        Email: <br>
                    </label>

                    <input class="input-form" type="email" name="email"> <br>  <br>
                    
                    <label for="">
                        Senha:  <br>
                    </label>

                    <input class="input-form" type="password" name="senha"> <br> <br>
                    
                    <label for="">
                        Confirmar 
                        Senha:
                    </label> <br>

                    <input class="input-form" type="password" name="confirmarSenha"> <br> <br>

                    <div id="container-submit">
                        <input id="submit-form" type="submit" value="Cadastrar"> <br> <br>
                    </div>
                     
                    <a href="./login.php"> Login </a>

                </form>

            </div>
             

        </div>
        
        <div id="right-container">

            <div> <img id="img-right" src="./static/img/homer.png" alt="logo"> </div>

            <div> <h2 id="h2-right"> <strong> DTFJ Depositos </strong> </h2> </div>

            <div> <h3 id="h3-right"> <strong> Sistema de deposito </strong> </h3> </div>

        </div>


    </div>
    
</body>
</html>
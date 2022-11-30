<!-- <?php

session_start();
ob_start();

require 'config.php';

if (isset($_SESSION['id'])){
    header ('Location: home.php');
    exit;
}

?> -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/login.css">
    <link rel="stylesheet" href="./static/css/reset.css">
    <title> Login</title>
</head>
<body>

    <div id="grid-container">

        <div id="left-container">
            
            <div> <img id="img-left" src="./static/img/homer.png" alt="logo"> </div>

            <div> <h2 id="h2-left"> <strong> DTFJ Depositos </strong> </h2> </div>

            <div> <h3 id="h3-left"> <strong> Sistema de deposito </strong> </h3> </div>

        </div>


        <div id="right-container">

            <div id="h1-right"> <h1> Login </h1> </div>

            <div id="form-container">

                <form id="form-content" action="login_action.php" method="post">

                    <label for="">
                        Email: <br>
                    </label>
 
                    <input class="input-form" type="text" name="email"> <br> <br>
                    
                    <label for="">
                        Senha: <br>
                    </label> 
                    
                    <input class="input-form" type="password" name="senha"> <br> <br>
                    
                    <input id="submit-form" type="submit" value="logar"> <br> <br>

                    <a href="cadastro.php" id="sla">Cadastrar</a>
        
                </form>

            </div>

        </div>
        
    </div>
    
</body>
</html>
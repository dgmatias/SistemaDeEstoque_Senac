<?php

require 'config.php';

session_start();
ob_start();


// if( (!isset($_SESSSION['id'])) ){
//     // $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário fazer o login!</p>";
//     header("Location: login.php");
// }


$lista = [];

$sql=$pdo->query("SELECT * FROM produtos");

if($sql->rowCount() > 0){
    $lista = $sql->fetchall(PDO::FETCH_ASSOC);
}

//Lista input get

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/home.css">
    <link rel="stylesheet" href="./static/css/reset.css">
    <title> Home </title>

</head>
<body>

    <div id="grid-container">
        
        <div id="menu-container">

            <div>

                <div class="item-menu"> <img src="" alt="logotipo">  </div>
                
                <div class="item-menu"> <span> DTFJ Depositos </span> </div>
                
            </div>


            <div>

                <div class="item-menu"> <a href=""> Home </a> </div>

                <div class="item-menu"> <a href="adicionar.php"> Adicionar produtos </a> </div>

                <div class="item-menu"> <a href="relatorio.php"> Relatório </a> </div>

            </div>  

            <div> 
                
                <div class="item-menu"> <img src="" alt="avatar"> </div>
            
                <div class="item-menu"> <span> Nome </span> </div>

                <div class="item-menu"> <a href="logout.php"> sair </a> </div>

            </div>

        </div>

        <div id="query-container">
            
            <div> <h2> Pesquisar </h2> </div>

            <div id="form-container">

                <form action="" method="get">

                    <input class="input-form" type="search" name="codigo"  placeholder="Buscar por codigo">
                    <input class="input-form" type="search" name="nome" placeholder="Buscar por nome">

                </form>

            </div> 

        </div>
        
        <div id="table-container">

            <table>

                <tr>
                    <th> Produto </th>
                    <th> codigo </th>
                    <th> nome </th>
                    <th> preço </th>
                    <th> quantidade </th>

                </tr>

                <?php foreach($lista as $usuario): ?>
                    <tr>
                    <td> <img src="arquivo/<?=$usuario['avatar']; ?>" alt="foto-do-produto" id="img-produto"> </td>
                        <td> <?php echo $usuario['codigo']?> </td>
                        <td> <?php echo $usuario['nome']?> </td>
                        <td> <?php echo $usuario['preco']?> </td>
                        <td> <?php echo $usuario['quantidade']?> </td>
                
                        <td>
                
                            <a href="editar.php?id=<?=$usuario['id']; ?>"
                            class="input-editar"
                            > Editar </a>
                
                        </td>
                
                    </tr>
                <?php endforeach; ?>   
            </table>

        </div>

    </div>
 
</body>
</html>
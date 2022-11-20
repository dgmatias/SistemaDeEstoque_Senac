<?php

session_start();
ob_start();

if((!isset($_SESSSION['id'])) && (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário fazer o login!</p>";
    header("Location: index.php");
}

require 'config.php';

$lista = [];

$sql = $pdo->query("SELECT * FROM produtos");

if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

//Lista input get

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">

        <h2> Pesquisar </h2>

        <form action="" method="get">

            <input type="search" name="item1" id="" placeholder="Buscar por item 1">
            <input type="search" name="item2" id="" placeholder="Buscar por item 2">

        </form>

    </div>

    <div>

        <table class="table">

            <tr>

                <th> Item 1 </th>
                <th> Item 2 </th>

            </tr>

            <?php foreach($lista as $usuario): ?>
                <tr>

                    <td> <?php echo $usuario['item1'];?> </td>
                    <td> <?php $usuario ['item2']; ?> </td>
                    <td>

                        <a href="editar.php?id=<?=$usuario['id']; ?>"
                            class="btn brn-success"
                        > Editar </a>

                        <a href="excluir.php?id=<?$usuario['id']; ?>"
                        onclick="return confirm('Tem certeza que deseja exluir?')"
                        class="btn btn-danger"
                        > Excluir </a>

                    </td>

                </tr>
            <?php endforeach; ?>   
        </table>

        <a href="adicionar.php" class="btn btn-primary"> Adicionar </a>

        <a href="./logout.php">Sair</a>

    </div>
    
</body>
</html>
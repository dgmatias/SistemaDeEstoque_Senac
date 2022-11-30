<?php

    require 'config.php';

    session_start();
    ob_start();


    $lista = [];

    $sql = $pdo->query("SELECT * FROM produtos WHERE quantidade < min_quantidade;");

    if($sql->rowCount() > 0){

        $lista = $sql->fetchall(PDO::FETCH_ASSOC);

    };      


?>

<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Relatório </title>
</head>
<body>
    <div class="container">
        
        <h1>Relatório</h1>

        <div class="imprimir">
            <button onclick="imprimir()"> imprimir </button>
        </div>
    
        <table class="table">
    
            <tr>
                <th> Nome </th>
                <th> Quantidade </th>
                <th> Quantidade mínima </th>
    
            </tr>
    
            <?php foreach($lista as $usuario): ?>
                
                <tr>
                    <td> <?php echo $usuario['nome']?> </td>
                    <td> <?php echo $usuario['quantidade']?> </td>
                    <td> <?php echo $usuario['min_quantidade']?> </td>
                </tr>
    
            <?php endforeach; ?>   
        </table>
    
        <script type="text/javascript"> function imprimir(){
            window.print();
        } </script>
        
    </div>
</body>
</html>


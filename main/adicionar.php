<?php

session_start();
ob_start();

require 'config.php';
include 'head.php';

//Filtra os valores enviados para o formulário.
 $codigo = filter_input (INPUT_GET, 'codigo');
 $nome = filter_input (INPUT_GET, 'nome');
 $preco = filter_input (INPUT_GET, 'preco');
 $quantidade = filter_input (INPUT_GET, 'quant');
 $min_quantidade = filter_input (INPUT_GET, 'min_quant');

 if ($codigo && $nome && $preco && $quantidade && $min_quantidade ) { 
    echo "entrou";
    $sql = $pdo->prepare("INSERT INTO produtos (codigo, nome, preco, quantidade, min_quantidade) VALUES (:codigo, :nome, :preco, :quantidade, :min_quantidade)");
    $sql->bindValue(':codigo', $codigo);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':preco', $preco);
    $sql->bindValue(':quantidade', $quantidade);
    $sql->bindValue(':min_quantidade', $min_quantidade);
    $sql->execute();

    header("Location: home.php");
    exit;

//  } if else {
    

 } else {
    // header ("Location: adicionar.php");
 }
?>

    <title>Adicionar Produtos</title>
    <link rel="stylesheet" href="./static/css/adicionar.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="flex-container">

        <div id="form container">

            <form action="" method="get">

                <label for="">
                  <span> Código: </span>  
                </label>  <br>

                <input class="input-form" type="number" name="codigo"> <br>
                
                <label for="">
                   <span> Nome:  </span> 
                </label>  <br>
                
                <input class="input-form" type="text" name="nome"> <br>

                <label for="">
                     <span>  Preço: </span> 
                </label>  <br>
                
                <input class="input-form" type="text" name="preco"> <br>
                
                <label for="">
                    <span>  Quantidade: </span> 
                </label>  <br>
                
                <input class="input-form" type="text" name="quant"> <br>
                
                <label for="">
                    <span> Quantidade mínima: </span> 
                </label>  <br>
                
                <input class="input-form" type="text" name="min_quant"> <br>
                
                <input class="submit-form" type="submit" value="Adicionar">

            </form> 
            
        </div>

    </div>
</body>
</html>

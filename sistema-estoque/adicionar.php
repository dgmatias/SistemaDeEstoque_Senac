<?php
require 'config.php';

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

    header("Location: index.php");
    exit;

//  } if else {
    

 } else {
    //header ("Location: adicionar.php");
 }
?>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produtos</title>
</head>
<body>

    <h1>Adicionar Produtos</h1>
    <div>
        <form action="" method="get">

            <label for="">
                Código:
                <input type="number" name="codigo" placeholder="Digite o código do produto">
            </label> </br>
            
            <label for="">
                Nome:
                <input type="text" name="nome" placeholder="Digite o nome do produto">
            </label> </br>

            <label for="">
                Preço:
                <input type="text" name="preco" placeholder="Digite o preço do produto">
            </label> </br>
            
            <label for="">
                Quantidade:
                <input type="text" name="quant" placeholder="Digite a quantidade do produto">
            </label> </br>

            <label for="">
                Quantidade mínima:
                <input type="text" name="min_quant" placeholder="Digite a quantidade mínima do produto">
            </label> </br>

            <input type="submit" value="Adicionar">
        </form>
    </div>

    
</body>
</html>
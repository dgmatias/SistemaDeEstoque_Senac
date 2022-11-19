<?php
require 'config.php';

//Filtra os valores enviados para o formulário.
 $codigo = filter_input (INPUT_GET, 'codigo');
 $nome = filter_input (INPUT_GET, 'pnome');
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
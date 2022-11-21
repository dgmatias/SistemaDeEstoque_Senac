<?php
require 'config.php';

//Filtra os valores enviados para o formulário.
 $codigo = filter_input (INPUT_POST, 'codigo');
 $nome = filter_input (INPUT_POST, 'nome');
 $preco = filter_input (INPUT_POST, 'preco');
 $quantidade = filter_input (INPUT_POST, 'quant');
 $min_quantidade = filter_input (INPUT_POST, 'min_quant');

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
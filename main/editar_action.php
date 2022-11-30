<?php

    require 'config.php';

    $id = filter_input(INPUT_POST, 'id');
    $codigo = filter_input(INPUT_POST, 'codigo');
    $nome = filter_input(INPUT_POST, 'nome');
    $preco = filter_input(INPUT_POST, 'preco');
    $quantidade = filter_input(INPUT_POST, 'quantidade');
    $min_quantidade = filter_input(INPUT_POST, 'min_quantidade');

    if ($id && $codigo && $nome && $preco && $quantidade && $min_quantidade ) {

        $sql = $pdo->prepare( "UPDATE produtos SET codigo = :codigo, nome = :nome, preco = :preco, quantidade = :quantidade, min_quantidade = :min_quantidade WHERE id = :id" );
        $sql->bindValue(':id', $id);
        $sql->bindValue(':codigo', $codigo);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':preco', $preco);
        $sql->bindValue(':quantidade', $quantidade);
        $sql->bindValue(':min_quantidade', $min_quantidade);
        $sql->execute();

        header("Location: home.php");
        exit;

    } else {
        header("Location: editar.php");
        exit;
    }
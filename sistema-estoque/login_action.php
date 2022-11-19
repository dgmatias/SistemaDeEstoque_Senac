<?php

session_start();
ob_start();

require 'config.php';

$dados = filter_input_array (INPUT_POST, FILTER_DEFAULT);

if ($dados){
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
    $sql->bindValue(":email", $dados['email']);
    $sql->execute();

    if ($sql->rowCount() === 1){
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);

        if (password_verify($dados['senha'], $resultado['senha'])){
            $_SESSION['id'] = $resultado['id'];

            header("Location: index.php");
            exit;

        }else{
            ("Location: login.php");
        exit;
        }
    }else{
        ("Location: login.php");
    exit;
    }
}else{
    ("Location: login.php");
exit;
}
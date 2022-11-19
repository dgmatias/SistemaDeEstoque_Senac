<?php

require 'config.php';

$dados = filter_input_array (INPUT_POST, FILTER_DEFAULT);

if ($dados){
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
    $sql -bindValue(":email", $dados['email']);
    $sql->execute;

    if($sql->rowCount() === 0){

        $senha_hash = password_hash($dados['senha'], PASSWORD_DEFAULT);

        $sql = $pdo->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)");
        $sql->bindValue(":nome", $dados['nome']);
        $sql->bindValue(":email", $dados ['email']);
        $sql->bindValue(":senha", $senha_hash);
        $sql->execute();

        header("Location: login.php");
        exit;
    }
}else{

    header("Location: cadastro.php");
    exit;

}
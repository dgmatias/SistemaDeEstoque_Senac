<?php
session_start();
ob_start();

require 'config.php';

$info = [];

    $id = filter_input(INPUT_GET, 'id');

    if($id) {
        $sql = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() != 0) {
            $info = $sql->fetch(PDO::FETCH_ASSOC);

        } else {
            header("Location: home.php");
            exit;
        }
    } else {
        header("Location: home.php");
        exit;
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
</head>
<body>

<h1>Edição de Produtos</h1>

<div id="img-container">


<div> <img src="arquivo/<?=$info['avatar']; ?>" alt="foto-do-produto" id="img-produto"> </div>

<div>  <h2>Trocar Avatar</h2> </div>

<div>

    <form action="recebedor.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$info['id']; ?>">
        <input type="file" name="arquivo" />
        <input type="submit" value="enviar">
    </form>

</div>

    <form action="editar_action.php" method="post">

    <input type="hidden" name="id" value="<?=$info['id']; ?>">
    
        <label for="">
            Código:
            <input type="number" name="codigo" value="<?php echo $info['codigo']; ?>">
        </label> </br>
        
        <label for="">
            Nome:
            <input type="text" name="nome" value="<?php echo $info['nome']; ?>">
        </label> </br>

        <label for="">
            Preço:
            <input type="text" name="preco" value="<?php echo $info['preco']; ?>">
        </label> </br>
        
        <label for="">
            Quantidade:
            <input type="text" name="quantidade" value="<?php echo $info['quantidade']; ?>">
        </label> </br>

        <label for="">
            Quantidade mínima:
            <input type="text" name="min_quantidade" value="<?php echo $info['min_quantidade']; ?>">
        </label> </br>

        <input type="submit" value="Editar">
    </form>
    
</body>
</html>
<?php

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
        <form action="adicionar_action.php" method="post">

            <label for="">
                Código:
                <input type="number" name="codigo" placeholder="Digite o código do produto">
            </label> </br>
            
            <label for="">
                Nome:
                <input type="text" name="pnome" placeholder="Digite o nome do produto">
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
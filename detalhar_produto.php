<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <title> Produtos cadastrados </title>
<link rel="stylesheet" href="layout1.css"> 
    <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
</head>
<body>
<?php
    require_once "conexao.php";
    
    $idProduto = $_GET['idProduto'];

    $comando = "SELECT * FROM produto u INNER JOIN categoria e ON u.idCategoria = e.idCategoria WHERE u.idProduto = $idProduto";
    $result = mysqli_query($conexao, $comando);

    while ($linha = mysqli_fetch_assoc($result)){
?>
    <p> Produto: <?=$linha['nomeproduto']?></p>
    <p> Descrição: <?=$linha['descricao']?></p>
    <p> Preço: <?=$linha['preco']?></p>
    <p> Quantidade em estoque: <?=$linha['quant_estoque']?></p>
    <p> Categoria: <?=$linha['idCategoria']?></p>
<?php
    }
    
?>
 <div id ="volt">
            <a id="voltar" href="index.html" > Voltar a página inicial</a>
            </div>
            
            <div id="rodape">
                <img id="pag" src="pagamento.png" alt="pagamentos">
                <img id="redes" src="redes.png" alt="redessociais">
                <div id="linkr">
                <table>
                    <tr>
                    <li> <a href="cadastroproduto2.html"> Página do administrador </a></li>
                    </tr>
                </table>
                </div>
                </div>       
</body>
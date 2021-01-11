<?php
require "conexao.php";
    
    $idProduto= $_GET['idProduto'];
    $comando=  "SELECT * FROM produto WHERE idProduto = $idProduto";
    $comando2= "SELECT * FROM categoria";
    $result= mysqli_query($conexao, $comando2);
    $result2= mysqli_query($conexao, $comando);
    $linha= mysqli_fetch_assoc($result);
    $linha2= mysqli_fetch_assoc($result2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cadastro de produtos</title>
    <link rel="stylesheet" href="layout1.css"> 
    <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<STYLE>A {text-decoration: none;} </STYLE>
<body>



    <div id ="tit">
        <h3> Editar produto </h3>
        </div>
      
            <div id="cadastrar">
        <form action="editarProduto.php" method="POST">
           
            <input type= "hidden" name= "hdidProduto" value="<?=$linha2['$idProduto']?>">
            <p>Produto:  <input type="text" name="nomeproduto"></p><br>
            <p>Descrição:  <input type="text" name="descricao"></p><br>
            <p>Preço:  <input type="text" name="preco"></p><br>
            <p>Quantidade no estoque:  <input type="number" name="quant_estoque"></p><br>
            <p>Selecione a categoria  </p>
                <select name="categoria">
                    <option>Categoria</option>
                   <?php
                    while ($linha = mysqli_fetch_assoc($result)){
                        echo '<option value='.$linha['idCategoria'].'">'. $linha['descricao']. "</option>";
                    }
                   ?>
                </select>
                <br>
                <br>
                <br>
                <button type= "submit">Editar produto</button> 
                <br>
                <br>
                <a id="cadastrados" href="listar_produtos.php" > <strong> Produtos já cadastrados</strong></a><br>
                
        
        </div>
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
</html>



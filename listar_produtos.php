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
    
    <h2> Produtos cadastrados </h2>
   
            <button class="botao" type="submit"><a href="cadastroProduto.php"> Adicionar um novo produto</a> </button><br>
        
    <?php
        require_once "conexao.php";
        $comando = "SELECT * FROM produto";
        $result = mysqli_query($conexao, $comando);

        while ($linha = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td>  <p> Produto:  <?= $linha["nomeproduto"]?></p></td>
        </tr>
        <tr>
        <td><a href = "deletarProduto.php?idProduto=<?=$linha['idProduto']?>"> Excluir |</a></td>
        </tr>
        <tr>
        <td><a href = "form_editarProduto.php?idProduto=<?=$linha['idProduto']?>"> Editar | </a></td>
        </tr>
        <a href = "detalhar_produto.php?idProduto=<?=$linha['idProduto']?>"> Ver detalhes do produto </a><br>
    <?php
        }
    ?>
     <div id ="volt">
            <a id="voltar" href="index.php" > Voltar a página inicial</a>
            </div>
            
            <div id="rodape">
                <img id="pag" src="pagamento.png" alt="pagamentos">
                <img id="redes" src="redes.png" alt="redessociais">
                <div id="linkr">
                <table>
                    <tr>
                    <li> <a href="cadastroProduto.php"> Página do administrador </a></li>
                    </tr>
                </table>
                </div>
                </div>       
    
</body>
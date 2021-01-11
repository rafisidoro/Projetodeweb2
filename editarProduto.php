<?php
require "conexao.php";

$idProduto= $_POST['hdidProduto'];
$nome = $_POST['nomeproduto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$estoque = $_POST['quant_estoque'];
$categoria = $_POST['categoria'];




$comando = "UPDATE produto SET nomeproduto= '$nome', descricao= '$descricao',
 preco= '$preco', quant_estoque= '$estoque', categoria= '$categoria' WHERE hdidProduto= $idProduto";
$retorno = mysqli_query($conexao, $comando);


if ($retorno) {
    echo "Produto alterado com sucesso!";
} 
else{
    echo "Falha ao alterar produto!".mysqli_error($conexao);
}
?>  
<?php
require "conexao.php";

$nome = $_POST['nomeproduto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$estoque = $_POST['quant_estoque'];
$idCategoria = $_POST['idCategoria'];




$comando = "INSERT INTO produto (nomeproduto, descricao, preco, quant_estoque, idCategoria)
 VALUES ( '$nome', '$descricao','$preco', '$estoque', '$idCategoria') ";

$retorno = mysqli_query($conexao, $comando);


if ($retorno){
    echo "Produto cadastrado com sucesso!";
} 
else{
    echo "Falha ao cadastrar produto!".mysqli_error($conexao);
}
?>  
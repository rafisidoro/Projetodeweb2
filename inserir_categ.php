<?php
require "conexao.php";

$categ = $_POST['categoria'];


$comando = "INSERT INTO categoria ( descricao ) VALUES ('$categ') ";
$retorno = mysqli_query($conexao, $comando);

if ($retorno){
    echo "Categoria cadastrada com sucesso!";
} 
else{
    echo "Falha ao cadastrar categoria!".mysqli_error($conexao);
   
}
?>  
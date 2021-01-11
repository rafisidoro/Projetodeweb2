<?php
    require_once "conexao.php";
    
    $idProduto = $_GET['idProduto'];

    $comando = "DELETE FROM produto WHERE idProduto=$idProduto";
    $result = mysqli_query($conexao, $comando);

    if($result){
        echo "O produto foi excluído com sucesso!";
    }
    else{
        echo "Falha ao excluir produto!";
    }
?>
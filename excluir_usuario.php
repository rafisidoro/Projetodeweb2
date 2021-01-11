<?php
       require_once "conexao.php";

       $cpf = $_GET['cpf'];
       $comando = "DELETE FROM usuario WHERE cpf = $cpf";
       $result = mysqli_query($conexao, $comando);

       if ($result){
           echo "Usuário deletado com sucesso!";
       }
       else{
           echo "erro ao deletar";
       }

    
    ?>
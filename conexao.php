<?php

$conexao = mysqli_connect("localhost", "root", "", "projetoWeb2");

if(! $conexao ){
    echo "Erro ao conectar!".mysqli_connect_error();
}
?>
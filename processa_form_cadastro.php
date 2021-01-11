<?php
require "conexao.php";

$cpf = $_POST["cpf"];
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$nascimento = $_POST["nascimento"];
$sexo = $_POST["sexo"];
$tipoUsuario = $_POST["tipoUsuario"]; 
$logradouro  = $_POST["logradouro"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$cep = $_POST["cep"];

$comando = "INSERT INTO usuario (cpf, nomeusuario, email, senha, datadenascimento, sexo, tipousuario) VALUES ('$cpf', '$usuario', '$email', '$senha', str_to_date('$nascimento', '%d/%m/%Y') , '$sexo', '$tipoUsuario')";
$comando2 = "INSERT INTO endereco (logradouro, numero, complemento, bairro, cep, cidade, cpf) VALUES ('$logradouro', '$numero', '$complemento', '$bairro','$cep', '$cidade', '$cpf')";
$retorno = mysqli_query($conexao, $comando);
$retorno = mysqli_query($conexao, $comando2);

if ($retorno){
    echo "Seu cadastro foi realizado com sucesso, seja bem vindo(a)!";
} 
else{
    echo "Falha ao cadastrar usuário!".mysqli_error($conexao);
}
?> 
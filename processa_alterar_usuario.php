<?php
require "conexao.php";

$cpf = $_POST['cpf'];
$nomeusuario = $_POST['nomeusuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$datadenascimento = $_POST['datadenascimento'];
$sexo = $_POST['sexo'];
$tipousuario = $_POST['tipousuario'];

$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];

$comando = "UPDATE usuario u INNER JOIN endereco e ON u.cpf = e.cpf SET u.cpf = '$cpf', nomeusuario = '$nomeusuario', email = '$email', senha = '$senha',
datadenascimento = str_to_date('$datadenascimento', '%d/%m/%Y'), sexo = '$sexo', tipousuario = '$tipousuario', logradouro = '$logradouro', numero = '$numero', complemento = '$complemento',
bairro = '$bairro', cidade = '$cidade', cep = '$cep' WHERE u.cpf = $cpf ";
$rodou = mysqli_query($conexao, $comando);

if ($rodou){
    echo "Alteração realizada!";
}
else{
    echo "Erro ao atualizar".mysqli_error($conexao);
}
?>
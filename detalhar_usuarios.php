<?php
require_once "conexao.php";
    $cpf = $_GET['cpf'];

    $comando = "SELECT * FROM usuario u INNER JOIN endereco e ON u.cpf = e.cpf WHERE u.cpf = $cpf";
    $result = mysqli_query($conexao, $comando);

    while ($linha = mysqli_fetch_assoc($result)){
?>
    <p> CPF: <?=$linha['cpf']?></p>
    <p> Usuário <?=$linha['nomeusuario']?></p>
    <p> E-mail: <?=$linha['email']?></p>
    <p> Senha: <?=$linha['senha']?></p>
    <p> Data de nascimento: <?=$linha['datadenascimento']?></p>
    <p> Sexo: <?=$linha['sexo']?></p>
    <p> Tipo de Usuario: <?=$linha['tipousuario']?></p>
    <p> Logradouro: <?=$linha['logradouro']?></p>
    <p> Número: <?=$linha['numero']?></p>
    <p> Complemento: <?=$linha['complemento']?></p>
    <p> Bairro: <?=$linha['bairro']?></p>
    <p> Cidade: <?=$linha['cidade']?></p>
    <p> CEP: <?=$linha['cep']?></p> <br>
<?php
    }
?>
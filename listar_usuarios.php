<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="layout1.css"> 
    <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <title> Usuários Cadastrados </title>
</head>
<body>
    <div id = "cadastro">
    <h3> Usuários cadastrados </h3>
    <a href = "cadastro.php"><button id="loginb" type="submit"> Adicionar um novo usuário </button> </a> 
    </div>
    <div id =cadastro2>
    <?php
        require_once "conexao.php";
        $comando = "SELECT u.nomeusuario, u.cpf FROM usuario u INNER JOIN endereco e ON u.cpf = e.cpf";
        $result = mysqli_query($conexao, $comando);

        while ($linha = mysqli_fetch_assoc($result)){
    ?>
        <p> Nome: <?= $linha["nomeusuario"]?></p>
        <p> CPF: <?= $linha["cpf"]?></p>
        <a href = "detalhar_usuarios.php?cpf=<?=$linha['cpf']?>"> <button id="loginb" type="submit"> Ver usuário </button> </a> <br>
        <a href = "excluir_usuario.php?cpf=<?=$linha['cpf']?>"> <button id="loginb" type="submit"> Excluir usuário </button> </a> <br>
        <a href = "form_alterar_usuario.php?cpf=<?=$linha['cpf']?>"><button id="loginb" type="submit"> Alterar dados do usuário </button> </a> <br>
    <?php
        }
    ?>
    </div>
</body>
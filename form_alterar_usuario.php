<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar dados</title>
</head>
<body>
    <h3>Alterar dados do usuário</h3>
    <form action="processa_alterar_usuario.php" method="POST"> 

        <p> CPF: <input type= "text" name="cpf"></p>
        <p> Nome de usuário: <input type= "text" name="nomeusuario"></p>
        <p> E-mail: <input type= "text" name="email"></p>
        <p> Senha: <input type= "password" name="senha"></p>
        <p> Data de nascimento: <input type= "text" name="datadenascimento"></p>
        <p> Sexo: <input type= "radio" value="M" name="sexo"> Masculino
        <input type= "radio" value="F" name="sexo"> Feminino </p>
        <p> Tipo de usuário: <select name="tipousuario">
        <option value = "Comum"> Usuário Comum </option>
        <option value = "Admin"> Usuário Administrador </option>
        </select> </p>

        <p> Logradouro: <input type= "text" name="logradouro"></p>
        <p> Número: <input type= "number" name="numero"></p>
        <p> Complemento: <input type= "text" name="complemento"></p>
        <p> Bairro: <input type= "text" name="bairro"></p>
        <p> Cidade: <input type= "text" name="cidade"></p>
        <p> CEP: <input type= "number" name="cep"></p>

        <button type= "submit"> Salvar alterações </button>
    </form>
</body>
</html>
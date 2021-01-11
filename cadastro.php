<!DOCTYPE html>

<html>
    <head>
        <title>Cadastre-se</title>
       <link rel="stylesheet" href="layout1.css"> 
        <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="cadastro">
        <h3> Cadastre-se </h3>
        </div>
        <div id="cadastro2">
        <form action = "processa_form_cadastro.php" method = "POST"> 
        <label for="cpf" > CPF </label> <br>     
        <input type='text' name="cpf" >
        <br>
               
        <br> <label for="usuario" > Nome de usuário </label> <br>
        <input type='text' name="usuario" >
        <br>
               
        <br><label for="email" > E-mail </label> <br>
        <input type='email' name="email" >
        <br>       
        
        <br> <label for="senha" > Senha </label> <br>
        <input type='password' name="senha" >
        <br>
               
        <br><label for="nascimento" > Data de nascimento </label> <br>
        <input type='text' name="nascimento" >
        <br>
               
        <br> <label for="sexo" > Sexo </label> <br>
        <input type='radio' name="sexo" value = "F" > <label for="Feminino"> Feminino </label> 
        <input type='radio' name="sexo" value = "M" ><label for="Masculino"> Masculino </label> 
        <br>
           
        <br> <label for="tipoUsuario" > Tipo de Usuário </label> <br>
        <select name="tipoUsuario">
        <option value = "Comum"> Usuário Comum </option>
        <option value = "Admin"> Usuário Administrador </option>
        </select>
        <br>

        <br> <label for="logradouro" > Logradouro </label> <br>
        <input type='text' name="logradouro" >
        <br>

        <br> <label for="numero" > Número </label> <br>
        <input type='text' name="numero" >
        <br>

        <br> <label for="complemento" > Complemento </label> <br>
        <input type='text' name="complemento" >
        <br>

        <br> <label for="bairro" > Bairro </label> <br>
        <input type='text' name="bairro" >
        <br>

        <br> <label for="cidade" > Cidade </label> <br>
        <input type='text' name="cidade" >
        <br>

        <br> <label for="cep" > CEP </label> <br>
        <input type='text' name="cep" >
        <br>
        
        <div id="botao">
        <button id="loginb" type="submit"> Cadastrar </button>
        </div>
        
        </form>
        </div>
        <a href="cadastroProduto.php"> Página do administrador </a><br>
        <a class="volt" href="index.php" > Voltar a página inicial</a>
        
        <div id="rodape">
           <img id="pag" src="pagamento.png" alt="pagamentos">
            <img id="redes" src="redes.png" alt="redessociais">
            <div id="linkr">
            <table>
                <tr>
                <li> <a href="cadastroProduto.php"> Página do administrador </a></li>
                </tr>
            </table>
            </div>
        </div>
    </body>
</html>
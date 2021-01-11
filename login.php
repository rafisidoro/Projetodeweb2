<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
         <link rel="stylesheet" href="layout1.css"> 
        <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <div id="login1">
        <h3> Login do usuario </h3>
        </div>
        <div id="login2">
        <form> 
        <label for="email"> E-mail </label>            
        <input type='email' name="email" > <br>
                         
        <label for="Senha"> Senha </label>        
        <input type='password' name="Senha" > 
            
        <div id="botao">
             <button id="loginb" type="submit"> Entrar </button>
        </div>
       
                </form> 
        </div>
        
        <div id="linkcad">
        <h2>Ainda não é cadastrado? <a href="cadastro.php"> Cadastre-se agora</a></h2>
        </div>
        
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

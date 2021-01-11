<html>
    <head>
        <title>Cadastro de categorias</title>
        <link rel="stylesheet" href="layout1.css"> 
        <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id ="tit">
        <h3> Cadastrar categoria </h3>
        </div>
      
            <div id="cadastrar">
        <form action="inserir_categ.php" method="POST">
           
            <p>Categoria:  <input type="text" name="categoria"></p><br>
           
                <br>
                <br>
                <br>
                <button type= "submit">Cadastrar categoria</button> 
                <br>
                <br>
                <br>


                <a id="cadastrados" href="cadastroProduto.php" > <strong> Produtos já cadastrados</strong></a>
        
        </div>
        <div id ="volt">
            <a id="voltar" href="index.html" > Voltar a página inicial</a>
            </div>
            
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

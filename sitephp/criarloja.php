
 <!DOCTYPE html>
  <html>
    <head>
      <title>Criar loja</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="assets/css/main.css" />
    </head>
      <body class="subpage">
         <header id="header">
            <a href="index.php" class="logo">Infinite Closet</a>
        
      </header>
      <div id="cadastro">
      <section id="three" class="wrapper">
        <div class="inner flex flex-3">
   <form action="Lojacad.php" method="post">
    <h1>Faça a sua lojinha ♥ </h1>

    <h3>Informações da loja </h3>
  
  <fieldset>
   
   <table cellspacing="10">

    <tr>
     <td>
      <label for="num">Nome da loja:</label>
     </td>
     <td align="left">
      <input type="text" name="nomeloja">
     </td>
    </tr>
    <tr>
     <td>
      <label for="validade">Seu nome: </label>
     </td>
     <td align="left">
      <input type="text" name="username" >
     </td>
    </tr>
    <tr>
     <td>
      <label for="cod">E-mail loja:</label>
     </td>
     <td align="left">
     <input type="text" name="emailloja">

     </td>
    </tr>
    <tr>
     <td>
      <label for="nameone">Produtos vendidos: </label>
     </td>
     <td align="left">
      <input type="text" name="tipodoproduto" value="roupas/premium/acessórios">
     </td>
    </tr>
    <tr>
     <td>
      <label for="validade">Descrição: </label>
     </td>
     <td align="left">
      <input type="text" name="descricao" >
     </td>
    </tr>
   </table>
  </fieldset>
  <br />
  <input type="submit">
  <input type="reset" value="Limpar">
  </form>

  </div>
  </section>

  </div>

 </body>
</html>
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
   <form action="Script_do_Formulario.php" method="post">
    <h1>Envie seu produto♥ </h1>

    <h3>Informações do produto</h3>
  
  <fieldset>
   
   <table cellspacing="10">

    <tr>
     <td>
      <label for="num">Nome do item:</label>
     </td>
     <td align="left">
      <input type="text" name="nome">
     </td>
    </tr>
    <tr>
     <td>
      <label for="validade">Tamanho: </label>
     </td>
     <td align="left">
      <input type="text" name="tamanho" >
     </td>
    </tr>
    <tr>
     <td>
      <label for="cod">Condições de uso:</label>
     </td>
     <td align="left">
     <input type="text" name="condi">

     </td>
    </tr>
    <tr>
     <td>
      <label for="nameone">Descrição: </label>
     </td>
     <td align="left">
      <input type="text" name="descri" value="">
     </td>
    </tr>
    <tr>
     <td>
      <label for="imagem">Imagem de perfil:</label>
     </td>
     <td>
      <input type="file" name="imagem" >

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
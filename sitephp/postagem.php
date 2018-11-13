<!DOCTYPE html>
  <html>
    <head>
      <title>Envie um post</title>
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
   <form action="test.php" method="post">
    <h1>Compartilhe um look ♥ </h1>

  <!-- DADOS PESSOAIS-->
  

  <h3>Preencha os dados</h3>
  <fieldset>
   
   <table cellspacing="10">
    <tr>
     <td>
      <label for="title">Título do post </label>
     </td>
     <td align="left">
      <input type="text" name="title">
     </td>
     
    <tr>
      <td>
        <label for="loja">Link da loja</label>
      </td>
           <td align="left">
      <input type="text" name="loja">
     </td>
     </tr>
     <tr>
     <td>
        <label for="produto">Link do produto</label>
      </td>
           <td align="left">
      <input type="text" name="produto" >
     </td>


    </tr>

     <tr>
     <td>
      <label for="imagem">Imagem do Look:</label>
     </td>
     <td>
      <input type="file" name="imagem" >

     </td>
    </tr>

    <tr>
     <td>
     
        <label for="mensagem">Postagem:</label>
           <td align="left">
           <textarea name="mensagem" rows="10" cols="40" maxlength="500">
      </textarea>
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
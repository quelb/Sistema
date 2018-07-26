 <!DOCTYPE html>
  <html>
    <head>
      <title>Assinatura</title>
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
    <h1>Faça sua assinatura ♥ </h1>

    <h3>Dados do cartão </h3>
  
  <fieldset>
   
   <table cellspacing="10">

    <tr>
     <td>
      <label for="num">Número do Cartão:</label>
     </td>
     <td align="left">
      <input type="text" name="rua">
     </td>
    </tr>
    <tr>
     <td>
      <label for="validade">Validade: </label>
     </td>
     <td align="left">
      <input type="text" name="validade" value="MM/YY">
     </td>
    </tr>
    <tr>
     <td>
      <label for="cod">Código de segurança:</label>
     </td>
     <td align="left">
     <input type="text" name="cod">

     </td>
    </tr>
    <tr>
     <td>
      <label for="nameone">Nome no cartão: </label>
     </td>
     <td align="left">
      <input type="text" name="nameone" value="primeiro nome">
     </td>
     <td>
      <label for="nametwo"> </label>
     </td>
     <td align="left">
      <input type="text" name="nametwo" value="último nome">
     </td>

    </tr>
    <tr>
     <td>
      <label for="cpf">CPF: </label>
     </td>
     <td align="left">
      <input type="text" name="cpf" size="11" maxlength=11> 
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
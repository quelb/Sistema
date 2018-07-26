 <!DOCTYPE html>
  <html>
    <head>
      <title>Cadastro</title>
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
    <h1>Cadastre-se em nosso site ♥ </h1>

  <!-- DADOS PESSOAIS-->
  

  <h3>Dados Pessoais</h3>
  <fieldset>
   
   <table cellspacing="10">
    <tr>
     <td>
      <label for="nome">Nome: </label>
     </td>
     <td align="left">
      <input type="text" name="nome">
     </td>
     <td>
      <label for="sobrenome">Sobrenome: </label>
     </td>
     <td align="left">
      <input type="text" name="sobrenome">
     </td>
    </tr>
    <tr>
      <td>
        <label for="apelido">Apelido:</label>
      </td>
           <td align="left">
      <input type="text" name="apelido">
     </td>
     <td>
        <label for="telefone">Telefone:</label>
      </td>
           <td align="left">
      <input type="text" name="telefone" >
     </td>


    </tr>
    <tr>
     <td>
      <label>Nascimento: </label>
     </td>
     <td align="left">
      <input type="date" name="nascimento" > 
     </td>
     <td>
        <label for="tam">Tamanho:</label>
      </td>
           <td align="left">
      <input type="text" name="tamanho" value=" P - M - G">
     </td>
      
      </tr>
    <tr>
     <td>
      <label for="rg">RG: </label>
     </td>
     <td align="left">
      <input type="text" name="rg" size="13" maxlength="13"> 
     </td>
     <td>
      <label>CPF:</label>
     </td>
     <td align="left">
      <input type="text" name="cpf" size="12" maxlength="12"> 
     </td>
    </tr>
   </table>
  </fieldset>

  <br />
  <!-- ENDEREÇO -->
  <h3>Dados de Endereço</h3>
  <fieldset>
   
   <table cellspacing="10">

    <tr>
     <td>
      <label for="rua">Rua:</label>
     </td>
     <td align="left">
      <input type="text" name="rua">
     </td>
     <td>
      <label for="numero">Numero:</label>
     </td>
     <td align="left">
      <input type="text" name="numero" size="4">
     </td>
    </tr>
    <tr>
     <td>
      <label for="bairro">Bairro: </label>
     </td>
     <td align="left">
      <input type="text" name="bairro">
     </td>
    </tr>
    <tr>
     <td>
      <label for="estado">Estado:</label>
     </td>
     <td align="left">
      <select name="estado"> 
      <option value="ac">Acre</option> 
      <option value="al">Alagoas</option> 
      <option value="am">Amazonas</option> 
      <option value="ap">Amapá</option> 
      <option value="ba">Bahia</option> 
      <option value="ce">Ceará</option> 
      <option value="df">Distrito Federal</option> 
      <option value="es">Espírito Santo</option> 
      <option value="go">Goiás</option> 
      <option value="ma">Maranhão</option> 
      <option value="mt">Mato Grosso</option> 
      <option value="ms">Mato Grosso do Sul</option> 
      <option value="mg">Minas Gerais</option> 
      <option value="pa">Pará</option> 
      <option value="pb">Paraíba</option> 
      <option value="pr">Paraná</option> 
      <option value="pe">Pernambuco</option> 
      <option value="pi">Piauí</option> 
      <option value="rj">Rio de Janeiro</option> 
      <option value="rn">Rio Grande do Norte</option> 
      <option value="ro">Rondônia</option> 
      <option value="rs">Rio Grande do Sul</option> 
      <option value="rr">Roraima</option> 
      <option value="sc">Santa Catarina</option> 
      <option value="se">Sergipe</option> 
      <option value="sp">São Paulo</option> 
      <option value="to">Tocantins</option> 
     </select>
     </td>
    </tr>
    <tr>
     <td>
      <label for="cidade">Cidade: </label>
     </td>
     <td align="left">
      <input type="text" name="cidade">
     </td>
    </tr>
    <tr>
     <td>
      <label for="cep">CEP: </label>
     </td>
     <td align="left">
      <input type="text" name="cep" size="5" maxlength="9"> 
    </tr>
   </table>
  </fieldset>
  <br />

  <!-- DADOS DE LOGIN -->
  <h3>Dados de login</h3>
  <fieldset>
   
   <table cellspacing="10">
    <tr>
     <td>
      <label for="email">E-mail: </label>
     </td>
     <td align="left">
      <input type="text" name="email">
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
    <tr>
     <td>
      <label for="pass">Senha: </label>
     </td>
     <td align="left">
      <input type="password" name="senha">
     </td>
    </tr>
    <tr>
     <td>
      <label for="passconfirm">Confirme a senha: </label>
     </td>
     <td align="left">
      <input type="password" name="">
     </td>
    </tr>
   </table>
  </fieldset>
  <br />
  <input type="submit">
  <input  value="Limpar">
  </form>

  </div>
  </section>

  </div>

 </body>
</html>
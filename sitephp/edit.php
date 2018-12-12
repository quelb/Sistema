<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("functions.php");
   seguranca();
   $username = $_SESSION['user']['username'];
   $nome = $_SESSION['user']['nome'];
   $sobrenome = $_SESSION['user']['sobrenome'];
   //ISSO DEVE ESTAR NO INICIO DE CADA PÁGINA QUE O USUÁRIO USAR APÓS O LOGIN
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alterar dados</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
<body>
<header id="header">
        <a href="index.php" class="logo">Infinite Closet</a>
        
      </header>
<form action="EDITSERV.php" method="post">
<label>username</label>
 <td align="left">
      <select name="username"> 
      <option><?php echo $username?></option> 

     </select>
     </td>
<!--<label>email</label>
  <input type="text" name="email"><br>
<label>senha</label>
  <input type="text" name="senha"><br>-->
<label>nome</label>
  <input type="text" name="nome"><br>
<label>sobrenome</label>
  <input type="text" name="sobrenome"><br>

<!--<label>cpf</label>
  <input type="text" name="cpf"><br>
<label>rg</label>
  <input type="text" name="rg"><br>
<label>telefone</label>
  <input type="text" name="telefone"><br>
<label>tamanho</label>
  <input type="text" name="tamanho"><br>
<label>nascimento</label>
  <input type="text" name="nascimento"><br>
<label>rua</label>
  <input type="text" name="rua"><br>
<label>bairro</label>
  <input type="text" name="bairro"><br>
<label>estado</label>
  <input type="text" name="estado"><br>
<label>numero</label>
  <input type="text" name="numero"><br>
<label>cidade</label>
  <input type="text" name="cidade"><br>
<label>cep</label>
  <input type="text" name="cep"><br>-->
  
<br>
<div class="button-container">
  <button type="update" name="update"> Alterar</button>
                 
</div>
</form>
</body>
</html>
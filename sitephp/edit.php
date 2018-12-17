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
	<title>edit</title>
</head>
<body>
<form action="EDITSERV.php" method="post">
<label>username</label>
 <td align="left">
      <select name="username"> 
      <option><?php echo $username?></option> 

     </select>
     </td>
<label>nome</label>
<input type="text" name="nome">
<label>sobrenome</label>
<input type="text" name="sobrenome">

<button type="update" name="update"></button>
</form>
</body>
</html>
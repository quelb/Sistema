<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: index.php"); 
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Página principal</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="profile">
  <b id="welcome">Bem - Vindo: <i><?php echo $login_session; ?></i></b>
  <b id="logout"><a href="logout.php">Sair</a></b>
 </div>
</body>
</html>
<?php

$error=''; 
if(isset($_POST['submit'])){
 if(empty($_POST['email']) || empty($_POST['senha'])){
 $error = "Usuário ou senha errado";
 }
 else
 {
 $usuario = $_POST['email'];
 $senha = $_POST['senha'];
 $conn = mysqli_connect("127.0.0.1", "root", "root");
 $db = mysqli_select_db($conn, "MaBiBookz");
 
 $query = mysqli_query($conn, "SELECT * FROM usuario WHERE senha='$senha' AND email='$usuario'");
 
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: perfil.php"); // coloca a pagina que voces quiserem(recomendo a de login, pra ficar mais fácil)
 }
 else
 {
 $error = "Usuario ou senha errado";
 header("Location: errologin.php");
 }
 mysqli_close($conn); // ISSO AQUI É UM tipo de return...Parando o codigo....(return não para)
 }
}

?>
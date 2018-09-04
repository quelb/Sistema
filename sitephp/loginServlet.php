<?php
//LOGIN
//ACHO QUE é ISSO...
$error=''; 
if(isset($_POST['submit'])){
 if(empty($_POST['email']) || empty($_POST['senha'])){
 $error = "errologin.php";
 }
 else
 {
 //Defina uma variavel e muda o que esta em ["nome no bd"];
 $user=$_POST['email'];
 $pass=$_POST['senha'];
 //Deixa o nome do host normal...Root tambem...Se você estiver na escola....Coloca "root" nos "" sem nada...
 $conn = mysqli_connect("localhost", "root", "root");
 //Entre os "coloca o nome do BD"
 $db = mysqli_select_db($conn, "infinitecloset");
 
 
 //coloque entre FROM e Where o nome da tabela do bd e depois de WHERE coloca o que você colocou nas string...
 //MEU BRAÇO
 //GUARAPARI
 //MINHA ARTE
 //YOU FRONT
 //Só segue.... É só copiar....
 $query = mysqli_query($conn, "SELECT * FROM usuario WHERE senha='$pass' AND email='$user'");
 
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: meuperfil.php"); // coloca a pagina que voces quiserem(recomendo a de login, pra ficar mais fácil)
 }
 else
 {
 $error = "Usuario ou senha errado";
 }
 mysqli_close($conn); // ISSO AQUI É UM tipo de return...Parando o codigo....(return não para)
 }
}
 //By yo e google...
 //3 info
 //cultura
?>

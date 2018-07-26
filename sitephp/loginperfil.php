<?php


session_start();
$error = ''; 
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['senha'])) {
$error = "Usuário ou senha errados";
}
else
{

$username = $_POST['email'];
$password = $_POST['senha'];

$conn = mysqli_connect("localhost", "root", "", "axe");

$query = "SELECT email, senha from usuario where email='$username' AND senha='$password' LIMIT 1";


$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();

if($stmt->fetch()) 
          $_SESSION['login_user'] = $username; 
          header("location: profile.php"); 
        }
else {
       $error = "Uuario errado";
     }
mysqli_close($conn); 
}
}
?>



<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "root";
   $databaseName = "inf";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $id = $_POST['username'];
   $fname = $_POST['nome'];
   $lname = $_POST['sobrenome'];
           
   // mysql query to Update data
   $query = "UPDATE `usuario` SET `nome`='".$fname."',`sobrenome`='".$lname."' WHERE `username` = '".$id."'";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
       header("Location: login.php");
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>
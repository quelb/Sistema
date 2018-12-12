<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "root";
   $databaseName = "INFINITE";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $id = $_POST['idpost'];
   $fname = $_POST['titulo'];
   $lname = $_POST['descri'];
           
   // mysql query to Update data
   $query = "UPDATE `postagem` SET `titulo`='".$fname."',`descri`='".$lname."' WHERE `idpost` = '".$id."'";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>
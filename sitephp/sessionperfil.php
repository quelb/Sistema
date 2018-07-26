<?php


$conn = mysqli_connect("localhost", "root", "", "axe");

session_start();


$user = $_SESSION['login_user'];


$query = "SELECT email from usuario where email= '$user'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
?>
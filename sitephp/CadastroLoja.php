<?php
	$con = mysqli_connect('127.0.0.1','root', 'root');
	
	if(!$con)
	{
		echo 'erro';
	}
	
	if(!mysqli_select_db($con, 'INFINITE'))
	{
		echo 'Banco de dados não foi encontrado';
	}
	
	$nome = $_POST['nome'];
	$pessoa = $_POST['pessoa'];
	$email = $_POST['email'];
	$produtos = $_POST['produtos'];
	
	$sql = "INSERT INTO loja (nome, pessoa, email, produtos) VALUES ('$nome', '$pessoa', '$email', '$produtos')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'cadastro não realizado';
	}
	else 
	{
		echo 'Cadastro realizado'; 
		header("Location: Login.php");
	}
	
?>
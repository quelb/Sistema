<?php

	$con = mysqli_connect('127.0.0.1','root', 'root');
	//Coloca os coisas ali...No meio de '' coloquem a "root"...Isso se vocês estiverem no pc da escola
	if(!$con)
	{
		echo 'deu ruim';
	}
	//Coloquem o nome do BD que esta entre "test";
	if(!mysqli_select_db($con, 'INFINITE'))
	{
		echo 'BD não selecionado';
	}
	//Criem strings e coloquem o mesmo nome do BD
	$nome = $_POST['nomeloja'];
	$email = $_POST['emailloja'];






	//coloquem o nome da tabela que quer cadastrar depois de usuario e depois os nomes das strings e depois de VALUES coloquem as strings criadas
	$sql = "INSERT INTO loja (nomeloja, emailloja) VALUES ('$nome', '$email')"; 
	
	if(!mysqli_query($con,$sql))
	{
		echo 'não cadastrado';
	}
	else 
	{
		echo 'Cadastrado com sucesso'; 
		header("Location: index.php");
	}
	
?>



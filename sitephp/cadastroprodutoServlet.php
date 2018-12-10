<?php

	$con = mysqli_connect('127.0.0.1','root', 'root');
	//Coloca os coisas ali...No meio de '' coloquem a "root"...Isso se vocês estiverem no pc da escola
	if(!$con)
	{
		echo 'deu ruim';
	}
	//Coloquem o nome do BD que esta entre "test";
	if(!mysqli_select_db($con, 'infinitecloset'))
	{
		echo 'BD não selecionado';
	}
	//Criem strings e coloquem o mesmo nome do BD
	
	$nome = $_POST['nome'];
	$tamanho = $_POST['tamanho'];
	$condicoesdeuso = $_POST['condicoesdeuso'];
    $descricao = $_POST['descricao'];
	$imagemproduto= $_POST['imagemproduto'];
	




	//coloquem o nome da tabela que quer cadastrar depois de usuario e depois os nomes das strings e depois de VALUES coloquem as strings criadas
	$sql = "INSERT INTO produto (nome, tamanho, condicoesdeuso, descricao, imagemproduto) VALUES ('$nome', '$tamanho', '$condicoesdeuso', '$descricao', '$imagemproduto')"; 
	
	if(!mysqli_query($con,$sql))
	{
		echo 'não cadastrado';
	}
	else 
	{
		echo 'Cadastrado com sucesso'; 
		header("Location: loja.php");
	}
	
?>



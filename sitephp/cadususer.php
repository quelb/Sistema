<?php

	$con = mysqli_connect('127.0.0.1','root', 'root');
	//Coloca os coisas ali...No meio de '' coloquem a "root"...Isso se vocês estiverem no pc da escola
	if(!$con)
	{
		echo 'deu ruim';
	}
	//Coloquem o nome do BD que esta entre "test";
	if(!mysqli_select_db($con, 'inf'))
	{
		echo 'BD não selecionado';
	}
	//Criem strings e coloquem o mesmo nome do BD
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$sobrenome = $_POST['sobrenome'];
    $rg = $_POST['rg'];
	$tamanho = $_POST['tamanho'];
	$cpf = $_POST['cpf'];
	$telefone= $_POST['telefone'];
	$nascimento= $_POST['nascimento'];
	$bairro= $_POST['bairro'];
	$rua= $_POST['rua'];
	$estado= $_POST['estado'];
	$numero= $_POST['numero'];
	$cidade= $_POST['cidade'];
	$cep= $_POST['cep'];
	$username = $_POST['username'];






	//coloquem o nome da tabela que quer cadastrar depois de usuario e depois os nomes das strings e depois de VALUES coloquem as strings criadas
	$sql = "INSERT INTO usuario (nome, email, senha, sobrenome, rg, tamanho, cpf, telefone, nascimento, bairro, rua, estado, numero, cidade, cep, username) VALUES ('$nome', '$email', '$senha', '$sobrenome', '$rg', '$tamanho', '$cpf', '$telefone', '$nascimento', '$bairro', '$rua', '$estado', '$numero', '$cidade', '$cep', '$username')"; 
	
	if(!mysqli_query($con,$sql))
	{
		echo 'não cadastrado';
	}
	else 
	{
		echo 'Cadastrado com sucesso'; 
		header("Location: login.php");
	}
	
?>



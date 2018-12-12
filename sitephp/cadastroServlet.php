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
	$apelido = $_POST['apelido'];
    $rg = $_POST['rg'];
	$cpf= $_POST['cpf'];
	$contato = $_POST['contato'];
    $sexo = $_POST['sexo'];
	$tamanho = $_POST['tamanho'];
	$nascimento = $_POST['nascimento'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$cep= $_POST['cep'];





	//coloquem o nome da tabela que quer cadastrar depois de usuario e depois os nomes das strings e depois de VALUES coloquem as strings criadas
	$sql = "INSERT INTO usuario (nome, email, senha, sobrenome, apelido, rg, cpf, contato, sexo,  tamanho, nascimento, rua, numero, bairro, estado, cidade, cep) VALUES ('$nome', '$email', '$senha', '$sobrenome', '$apelido', '$rg', '$cpf', $contato', '$sexo', '$tamanho', $nascimento', '$rua', '$numero', '$bairro', $estado, '$cidade', '$cep' )"; 
	
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



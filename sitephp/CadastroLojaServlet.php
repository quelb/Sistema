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
	$cod_loja = $_POST['cod_loja'];
	$cod_usuario = $_POST['cod_usuario'];
	$descricao = $_POST['descricao'];
	$emailloja = $_POST['emailloja'];
	$nomeloja = $POST['nomeloja'];
    $nomeusuario = $_POST['nomeusuario'];
    $tipodoproduto = $_POST['tipodoproduto'];




	//coloquem o nome da tabela que quer cadastrar depois de usuario e depois os nomes das strings e depois de VALUES coloquem as strings criadas
	$sql = "INSERT INTO usuario (cod_loja, cod_usuario, descricao, emailloja, nomeloja, nomeusuario, tipodoproduto) VALUES ('$cod_loja', '$cod_usuario', '$descricao', '$emailloja', '$nomeloja', '$nomeusuario', '$tipodoproduto')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'não cadastrado';
	}
	else 
	{
		echo 'Cadastrado com sucesso'; 
		header("Location: criarloja.php");
	}
	
?>



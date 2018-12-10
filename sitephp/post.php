<?php
	require_once("config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(checkValues($_POST['titulo'], $_POST['descri']))
		{
			session_start();
			$titulo = $_POST['titulo'];
			$texto = $_POST['descri'];
			postar($titulo, $texto);
		}
		else {
			$message = '<h1>Por favor, preencha os campos corretamente.</h1>
						<h3><a href="publicar.php">Tentar Novamente</a></h3>';
			echo $message;
		}
	}
	else {
		//header("Location: ../index.html");
	}

	function checkValues($username, $senha) {
		return true; //reescrever que faÃ§a sentido
	}

	function postar($titulo, $texto) {
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "INSERT INTO postagem (titulo, descri) VALUES ('".$titulo."', '".$texto."')";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		if($result !== null){
			header("Location: looks.php");
		} else {
			$message = '<h1>Houve um erro ao salvar a publicação</h1>
						<h3>Por favor, <a href="publicar.php">Tente Novamente</a></h3>';
			echo $message;
		}
	}
?>

<?php
	require_once("config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(checkValues($_POST['nomeloja'], $_POST['username'], $_POST['descricao'], $_POST['emailloja'], $_POST['tipodoproduto']))
		{
			$nomeloja = $_POST['nomeloja'];
			$username = $_POST['username'];
			$descricao = $_POST['descricao'];
			$emailloja = $_POST['emailloja'];
			$tipodoproduto = $_POST['tipodoproduto'];
			cadastrar($nomeloja, $username, $descricao, $descricao, $tipodoproduto);
		}
		else {
			$message = '<h1>Por favor, preencha os campos corretamente.</h1>
						<h3><a href="../index.html">Tentar Novamente</a></h3>';
			echo $message;
		}
	}
	else {
		header("Location: ../index.html");
	}

	function checkValues($username, $senha) {
		return true;
	}

	function cadastrar($nomeloja, $username, $descricao, $emailloja, $tipodoproduto) {
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "INSERT INTO loja (nomeloja, username, descricao, emailloja, tipodoproduto) VALUES ('".$nomeloja."', '".$username."', '".$descricao."', '".$emailloja."', '".$tipodoproduto."')";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		if($result !== null){
			echo "Oi";
			session_start();
			$_SESSION['user']['username'] = $username;
			$_SESSION['user']['nomeloja'] = $nome;
			$_SESSION['user']['descricao'] = $email;
			header("Location: lojas.php");
		}	else {
			$message = '<h1>Erro ao cadastrar o usuário.</h1>
						<h3>Por favor, <a href="../index.html">Tente Novamente</a></h3>';
			echo $message;
		}
	}
?>

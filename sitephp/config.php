<?php


	class Config
	{
		private $servidor = "localhost";
		private $user = "root";
		private $senha = "root";
		private $banco = "INFINITE";

		function conectaBanco() {
			$con = mysqli_connect($this->servidor, $this->user, $this->senha, $this->banco);
			//conecta no mysql faz favor

			if (!$con) {
			    die('Não foi possível conectar: ' . mysqli_error());
			}

			return $con;
		}
	}

	$_SESSION['ROOT_ADDRESS'] = dirname(__FILE__);

?>

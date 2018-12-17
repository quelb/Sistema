
<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Lojas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
		<?php include 'header.php';?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					

					<!-- Content -->
					<h1>Lojinhas</h1>
					<form method="post" action="#">
										<div class="row uniform">
											<div class="9u 12u$(small)">
												<input type="text" name="pesquisar" id="pesquisar" value="" placeholder="Pesquise uma loja" />
											</div>
											<div class="3u$ 12u$(small)">
												<input type="submit" value="Buscar" class="fit" />
											</div>
										</div>
									</form>
									<ul class="actions">
										<li><a href="criarloja.php" class="button alt small">Criar loja</a></li>
									</ul>
									

					<hr class="major" />

					<!-- Elements -->
						
						<div class="row 200%">
							<div class="12u">
				<?php
				require_once("config.php");
				$config = new Config();
				$conexao = $config->conectaBanco();

				$query = "select nomeloja from loja";

				$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

				$num = 0;
				if ($result->num_rows > 0) {
		    	// output data of each row
			    while($row = $result->fetch_assoc()) {
						$num = $num + 1;

			echo "				<h3>".$row["nomeloja"]."</h3> ";


			 }
		}
		$conexao->close();
		?>





				
			</section>
			

		<!-- Footer -->
		<?php include 'footer.php';?>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
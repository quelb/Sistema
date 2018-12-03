<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("functions.php");
   seguranca();
   $username = $_SESSION['user']['username'];
   $nome = $_SESSION['user']['nome'];
   $email = $_SESSION['user']['email'];
   $sobrenome = $_SESSION['user']['sobrenome'];
   //ISSO DEVE ESTAR NO INICIO DE CADA PÁGINA QUE O USUÁRIO USAR APÓS O LOGIN
?>


<!DOCTYPE HTML>
<!--
	Visualize by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Perfil</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="perfil/css/cssperfil.css" />
	</head>
	<body>

		<!-- Wrapper -->

			<div id="wrapper">
					
				
				<!-- Header -->
					<header id="header">

						
						<span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
						<h6>Editar Perfil</h6>
						<h1> <strong> <?php echo $nome?></strong> </br> <?php echo $sobrenome?> </strong> <br />
						"Enquanto você for o que os outros querem que você seja, você não será ninguém."</h1>

						
						<ul class="actions">
							<li><a href="loja.php" class="button alt">Lojinha</a></li>
						</ul>
						<ul class="actions small">
							<li><a href="#" class="button alt small">Seguidores</a></li>
							<li><a href="#" class="button alt small">Seguindo</a></li>
							<li><a href="#" class="button alt small">Desejos</a></li>
							<li><a href="closet.php" class="button alt small">Closet</a></li>
						</ul>

						<ul class="icons">
							<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
					</header>

				<!-- Main -->
					<section id="main">

						<!-- Thumbnails -->
							<section class="thumbnails">
								<div>
									<a href="images/fulls/01.jpg">
										<img src="images/thumbs/01.jpg" alt="" />
										<h3>Look black</h3>
									</a>
									<a href="images/fulls/02.jpg">
										<img src="images/thumbs/02.jpg" alt="" />
										<h3>Look floral</h3>
									</a>
								</div>
								<div>
									<a href="images/fulls/03.jpg">
										<img src="images/thumbs/03.jpg" alt="" />
										<h3>Look básico</h3>
									</a>
									<a href="images/fulls/04.jpg">
										<img src="images/thumbs/04.jpg" alt="" />
										<h3>Look passeio</h3>
									</a>
									<a href="images/fulls/05.jpg">
										<img src="images/thumbs/05.jpg" alt="" />
										<h3>Look passeio</h3>
									</a>
								</div>
								<div>
									<a href="images/fulls/06.jpg">
										<img src="images/thumbs/06.jpg" alt="" />
										<h3>Look passeio</h3>
									</a>
									<a href="images/fulls/07.jpg">
										<img src="images/thumbs/07.jpg" alt="" />
										<h3>Look social</h3>
									</a>
								</div>
							</section>

					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="actions">
							<li><a href="index.php" class="button alt">Infinite Closet</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
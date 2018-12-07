

<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<a href="index.php" class="logo">Infinite Closet</a>
				
			</header>

			<section id="banner">
				<div class="content">
				<div class="login">
					  <div class="card"></div>
					  <div class="card">
					    <h1 class="title">Login</h1>
					    <form action="logins.php" method="post">
					      <div class="input-container">
					        <input type="text" id="#{label}" name="user" required="required"/>
					        <label for="#{label}" >Apelido</label>
					        <div class="bar"></div>
					      </div>
					      <div class="input-container">
					        <input type="text" id="#{label}" name="senha" required="required" />
					        <label for="#{label}">Senha</label>
					        <div class="bar"></div>
					      </div>
					      <div class="button-container">

					        <button type="submit" name="submit"> Entrar </button></a>

					        
					      </div>
					      <div class="footer"><a href="#">Esqueceu sua senha?</a></div>
					    </form>
					  </div>
					
					<ul class="actions">
						<li><a href="cadastro.php" class="button scrolly">Cadastre-se</a></li>
					</ul>
				</div>
			</section>
			
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/style_login.css">
	<link rel="stylesheet" href="../../css/menu_registrar.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title>Mi perfil</title>
</head>
<body>
	<?php
		session_start();
	?>
	<header>
		<div class="contenedor">
			<h2 class="logotipo">Ricas delicias</h2>
			<nav>
				<a href="./perfil_gerente.php">Perfil</a>
				<a href="../menu.html">Menú</a>
				<a href="../servicios.html">Servicios</a>
				<a href="../contacto.html">Contacto</a>
				<a href="../acerca_de.html">Acerca de</a>
			</nav>
		</div>
	</header>
	<main>
		<div>
			<div class="div_info_perfil">
				<div >
					<img src="../../images/logo_gerente.png" alt="">
				</div>
				<div class="div_php_info" >
					<?php
						$usuario = $_SESSION['username'];
						$correo = $_SESSION['correo'];
						$codigo = $_SESSION['codigo'];
						echo "<h2>Mi perfil</h2>";
						echo "<label> Bienvenido $usuario</label><br>";
						echo "<label> código: $codigo</label><br>";
						echo "<label> correo: $correo</label><br>";
					?>
				</div>
				<div class="div_menu_ge">
					<button class="img_cliente"><a href="./form_registrar_cli.php">Registar cliente</a> </button>
					<button class="img_cocinero"><a href="./form_registrar_coci.php">Registrar cocinero</a></button>
					<button class="img_mesero"><a href="./form_registrar_mes.php">Registrar mesero</a></button>
				</div>
			</div>
		</div>
		
	</main>
	<footer style="background-color: #1b1b1b; padding: 20px;">
		<div class="footer-container">
		<div class="footer-section">
			<br>
			<ul class="social-icons">
			<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
			<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			<li><a href="#"><i class="fab fa-youtube"></i></a></li>
			</ul>
			<br>
			<ul class="social-foo">
				<a> Quienes somos</a>
				<a> Preguntas frecuentes</a>
				<a> Contacto</a>
			</ul>
			<br>
			<p class="derechos">© 2023 Ricas Delicias. Todos los derechos reservados.</p>
		</div>
		</div>
	</footer>
	<script src="..//js//validar_contra.js"></script>
	<script src="https://kit.fontawesome.com/71b9e775fc.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>


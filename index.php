<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		

	<meta name="viewport" content="width=device-width, maximum-scale=5">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">	
	<meta name="description" content="Venta de Ganado Bovino en Venezuela de Carne y Leche para Seba o produccion Lactea">


		<!--Etiquetas Metas para redes sociales-->
		<meta property="og:title" content="Ventas de ganado Bovinos en Venezuela"/>
		<meta property="og:type" content="article" />
		<meta property="og:image" content="https://www.tutopress.co/wp-content/uploads/2018/08/como-hacer-un-backup-en-wordpress.jpg" />
		<meta property="og:url" content="localhost/mio/ganadobo" />
		<meta property="og:description" content="Tener un backup o copia de seguridad de nuestro sitio es algo que debemos hacer frecuentemente, nadie está exento a un ataque o un fallo de seguridad."/>

		<link rel = "apple-touch-icon" href = "/ico/ fondo.jpg">

		<title>Ganado-Bo | Venta De Ganado</title>

		<script src="js/jquery.min.js"></script>
		<script type="application/ld+json" src="js/descripcion.js"></script>
		<!--<script src="js/movil.js"></script>-->
		<link rel="stylesheet" href="css/estilo.css">

	</head>
	<body>
		<?php
			header ('Content-type: text/html; charset=utf-8');
		?>

		<header>
			<nav class="navegar">

				<a href="index.php" class="logo">
					<h2>Ganado-Bo</h2>
				</a>

				<div class="centrar">

				<ul class="menu">
					<li>
						<a href="index.php">Inicio</a>
					</li>

					<li>
						<a href="#">Mas</a>
						<ul class="submenu">
							<li>
								<a href="#">Contatanos</a>
							</li>
							<li>
								<a href="#">Configuracion</a>
							</li>
							<li>
								<a href="#">Salir</a>
							</li>
						</ul>
					</li>
				</ul>
				</div>
			</nav>
		</header>


		<main>

			<nav class="segunav">
				<ul class="segunmenu">
					<li>
						<a href="#">Foto</a>
					</li>
					<li>
						<a href="#">Video</a>
					</li>
					<li>
						<a href="#">Pesar</a>
					</li>
					<li>
						<a href="#">Raza</a>
					</li>
					<li>
						<a href="#">Mas</a>
						<ul class="submenu2">
							<li>
								<a href="#">Pastaje</a>
							</li>
							<li>
								<a href="#">Precio</a>
							</li>
							<li>
								<a href="#">Caracteristicas</a>
							</li>
							<li>
								<a href="#">Enfermedades</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>

			<div class="unidor">
				<header class="buscador">
					<form action="index.php" method="post">
						
						<input class="buscar" type="text" maxlength="98" placeholder="Buscar" spellcheck="true" title="Complete el campo para buscar" required>

						<input type="submit" value="Buscar" class="boton">
				</form>
				</header>
				
			<article>

				<?php 
				for ($i=0; $i <= 30 ; $i++) { 
				?>
				<section class="imgventas">
					<img src="img/LOGO.webp" alt="ventas">
					<p>Se vende ganado bovino de 270 aproximadamente en La Pastora Edo Lara</p>
				</section>

				<?php
			}
				?>


				<footer class="invitar">
					<a href="#">Sigue nuestra pagina de facebook Aquí</a>
				</footer>
			</article>
		</div>
		</main>

	</body>

</html>

<!--prevenir el XSS
echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');-->

<!--
mostrarle al navegar las obsiones de img width
	<img src = "flor-grande.jpg" srcset = "flor-pequeña.jpg 480w, flor-grande.jpg 1080w" tamaños = "50vw">-->


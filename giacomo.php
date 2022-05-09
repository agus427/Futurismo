<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Futurismo</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
</head>
<body>

	<main class="grid-filosofia">

		<header class="header">

			<a href="index.html" class="futurismo"><h1>FUTURISMO</h1></a>

			<nav class="botonera">

			<ul>
				
				<li><a href="historia.html">Historia</a></li>
				<li><a href="filosofia.html">Filosofia</a></li>
				<li><a href="artistas.html">Artistas</a>

					<ul class="submenu">
						<li><a href="giacomo.php">Giacomo Balla</a></li>
						<li><a href="umberto.php">Umberto Boccioni</a></li>
						<li><a href="carlo.php">Carlo Carrá</a></li>
					</ul>

				</li>
				<li><a href="galeria.html">Galeria</a></li>
				<li><a href="contacto.html">Contacto</a></li>

			</ul>
			</nav>
		</header>

			<?php
				$frases=array(
				'Clave 1' => "El hombre, en su orgullo, creó a Dios a su imagen y semejanza.",
				'Clave 2' => "La potencia intelectual de un hombre se mide por la dosis de humor que es capaz de utilizar.",
				'Clave 3' => "Solamente aquel que construye el futuro tiene derecho a juzgar el pasado.",
				'Clave 4' => "Lo que no me mata, me fortalece.",
				'Clave 5' => "La edad de casarse llega mucho antes que la de quererse.",
				'Clave 6' => "Cuando se tienen muchas cosas que meter en él, el día tiene cien bolsillos.",
				'Clave 7' => "Lo que me preocupa no es que me hayas mentido, sino que, de ahora en adelante, ya no podré creer en ti.",
				);

				$aleatorio = ($frases);

			?>


		<section>
			<?php
				echo "$frases[$aleatorio]";
			?>
			
		</section>


		<footer class="footer">

			<p class="nombre">Desarrollado por Agustin Harris.</p>

			<div>
			<a href="https://www.palermo.edu/" target="_blank"><img src="img/logoup.png" class="logoup"></a>
			</div>
			
		</footer>

	</main>
</body>
</html>
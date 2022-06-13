<?php session_start();?>
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

	<main class="grid-login">

		<header class="header">

			<a href="index.html" class="futurismo"><h1>FUTURISMO</h1></a>

			<nav class="botonera">

				

			<ul>
				
				<li><a href="historia.html">Historia</a></li>
				<li><a href="filosofia.html">Filosofia</a></li>
				<li><a href="#">Artistas</a>

					<ul class="submenu">
						<li><a href="filipo.html">Filippo Tommaso Marinetti</a></li>
						<li><a href="giacomo.html">Giacomo Balla</a></li>
						<li><a href="umberto.html">Umberto Boccioni</a></li>
						<li><a href="carlo.html">Carlo Carrá</a></li>
						<li><a href="luigi.html">Luigi Russolo</a></li>
					</ul>

				</li>
				<li><a href="galeria.html">Galeria</a></li>
				<li><a href="contacto.html">Contacto</a></li>

				<li>

				<form action="resultados_buscar.php" method="post">

    			<label>

   				 <input type="search" name="buscar" placeholder="Buscar..." class="cajadeescribir" />

 			   <input type="submit" value="Buscar" class="btn">
 			   
  			  </label>
    			</form></li>

    			<li><a href="usuario.php"><img src="img/user.png"></a></li>

			</ul>

			</nav>

		</header>

		<section class="section-login">

<?php

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){


	echo "
	<div class='video slide-in-blurred-left2'><iframe width='400' height='315' src='https://www.youtube.com/embed/xyct5oUH3DM' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; controls;' allowfullscreen></iframe></div>

			<div class='video slide-in-blurred-left2'><iframe width='400' height='315' src='https://www.youtube.com/embed/sAc4DPJLMLQ' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; controls;' allowfullscreen></iframe></div>

			<div class='video slide-in-blurred-left2'><iframe width='400' height='315' src='https://www.youtube.com/embed/1P96T9n3YDk' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>

			<div class='videoG slide-in-blurred-right2'><iframe width='560' height='315' src='https://www.youtube.com/embed/YXiZjvSsqF0' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>

			<div class='salir'><a href='salir.php'>Cerrar sesion</a></div>

	"
	;}
	else{
	echo "<br><h2 class='pepe'>Este contenido es solo para usuarios registrados...</h2>
	<br>
	<h2 class='pepe'>Por favor registrate para poder acceder.</h2>";
	include("form_registro2.php");
}
?>

</section>




	<footer class="footer">

			<p class="nombreAH">Desarrollado por Agustin Harris.</p>

			<div>
			<a href="https://www.palermo.edu/" target="_blank"><img src="img/logoup.png" class="logoup"></a>
			</div>
			
		</footer>

</body>
</html>
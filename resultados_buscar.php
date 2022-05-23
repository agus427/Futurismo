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

	<main class="grid-resultados">

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

				<li><form action="resultados_buscar.php" method="post">

    			<label>

   				 <input type="search" name="buscar" placeholder="Buscar..." class="cajadeescribir" />

 			   <input type="submit" value="Buscar" class="btn">
 			   
  			  </label>
    			</form></li>

			</ul>



			</nav>

		</header>









<section class="section-re">

	<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	

	$consulta = mysqli_query($conexion, "SELECT * FROM artstas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>


    
	<?php

		while($resultados=mysqli_fetch_array($consulta)) {

	?>

	<div class="fadein">
    <?php	
			echo $resultados['nombre'];
			echo $resultados['apellido'];
			echo $resultados['bio'];
	?></div>

</section>






<section class="section-re2">

    <div class="cajafotos">

    <img src="<?php echo $resultados['foto']?>" class="border-radiusHP fotoizquierda fadein">

    <img src="<?php echo $resultados['foto2']?>" class="border-radiusHP fotoderecha fadein">

    </div>


    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>



</section>




<footer class="footer">

			<p class="nombreAH">Desarrollado por Agustin Harris.</p>

			<div>
			<a href="https://www.palermo.edu/" target="_blank"><img src="img/logoup.png" class="logoup"></a>
			</div>
			
		</footer>

</main>

</body>
</html>
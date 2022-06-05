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

	<main class="grid-registroylogin">

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



		<section class="section-registroylogin">


			<div class="efectoreylo"><img src="img/i12.png" class="ich"><h2 class="h2reylo">Registrate</h2></div>
			<br>




		<div class="cajaregistro efectoreylo">

 		<form action="registro.php" method="post">

        <div class="float"><img src="img/i22.png" class="ich2">
        <label class="nombre">Nombre</label>
        <input class="recuadro01 cajadeescribir" type="text" name="nombre" autofocus required></div>

        <div class="float"><img src="img/i22.png" class="ich2">
        <label class="nombre">Apellido</label>
        <input class="recuadro01 cajadeescribir" type="text" name="apellido" autofocus required></div>

        <div class="float"><img src="img/i22.png" class="ich2">
        <label class="nombre">Mail</label>
        <input class="recuadro01 cajadeescribir" type="email" name="email" autofocus required></div>

        <div class="float"><img src="img/i22.png" class="ich2">
        <label class="nombre">Usuario</label>
        <input class="recuadro01 cajadeescribir" type="text" name="usuario" autofocus required></div>

        <div class="float"><img src="img/i22.png" class="ich2">
        <label class="nombre">Contraseña</label>
        <input class="recuadro01 cajadeescribir" type="password" name="password" autofocus required></div>

        <div class="float"><input class="boton btn" type="submit" name="sumit" value="Registrate"></div>

  	</form> 		
 	</div>
			
		</section>





		<section class="section-registroylogin2">

			<div class="efectoreylo"><img src="img/i12.png" class="ich"><h2 class="h2reylo">Inicia sesion</h2></div>
			<br>




		<div class="cajaregistro2 efectoreylo">

 		<form action="login.php" method="post">

        <div class="float"><img src="img/i22.png" class="ich2">
        <label class="nombre">Usuario</label>
        <input class="recuadro01 cajadeescribir" type="text" name="usuario" autofocus required></div>

        <div class="float"><img src="img/i22.png" class="ich2">
        <label class="nombre">Contraseña</label>
        <input class="recuadro01 cajadeescribir" type="password" name="password" autofocus required></div>

        <div class="float"><input class="boton btn" type="submit" name="sumit" value="Inicia Sesion"></div>

  	</form> 		
 	</div>
			
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
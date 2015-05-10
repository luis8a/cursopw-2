<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="utf-8">
			<meta name="description" content="Ejercicio 4 HTML5 y CSS3">
			<meta name="robots" content="noindex, nofollow">
			<meta name="googlebot" content="noindex, nofollow">
			<meta name="keywords" content="HTML5, CSS3">
			<meta content="width=device-width, initial-scale=1, minimum-scale=1" name="viewport">
			<title>Ejercicio de Prog.WEB 1</title>
			<link rel="stylesheet" href="misestilos1.css">
		</head>
		<body>
			<section class="fomulario">
			
			
<?php
	//Obtener los valores de las variables de HTML5
		if (isset($_REQUEST["insertar"]))
			{
				$insertar = $_REQUEST["insertar"];
				$usuario = $_REQUEST["usuario"];
				$clave = $_REQUEST["clave"];
				$correo = $_REQUEST["correo"];
				//Conectar con la Base de Datos "Clientes"
				$servername = "localhost";
				$
			}
		
		
		else
			

?>			
			
				
				<h1>Registrarse: </h1>
				<form action="insertar_usuario.php" name="insertar" method="post">
					<p class="campo">Usuario:*&nbsp;&nbsp;<input type="text" name="usuario" size="10" maxlenght="10" required></p>
					<p class="campo">Clave:*&nbsp;&nbsp;<input type="text" name="miclave" id="miclave" maxlenght="10" required></p>
					<p class="campo">Correo:*&nbsp;&nbsp;<input type="email" name="micorreo" id="micorreo" required></p>
					<p class="campo"><input type="submit" name="insertar" value="Registrarse"></p>
				</form>
				<p class="campo">Nota: Los Datos marcados con (*) deben ser rellenados obligatoriamente</p>
				<p class="campo"><a href="index.html">Volver al Inicio</a></p>
			</section>
		</body>
	</html>
			
			
			
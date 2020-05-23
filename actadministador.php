<!DOCTYPE html>
<html>
<head>
	<title>Actualizaciones</title>
	<link rel="stylesheet" type="text/css" href="stylep.css">
	<meta charset="utf-8">
</head>
<body bgcolor="black">

<center><h2>GESTION DE COMPUTADORES</h2></center>

<div id="cabeza">
	<ul>
		<a href="selecadministrativo.php"><li>INICIO</li></a>
		<a href="index.php"><li>LOGOUT</li></a>
	</ul>
</div><br><br><br>
	<div id="prestamo">
		<center><h1>Actualizacion de docente</h1></center>

			<?php
       				error_reporting(0);
							$conexion=mysqli_connect("localhost","root","","computadores")
	or die("<h2>Problemas al conectar con el servidor</h2>");


					echo "Nombre de usuario modificado"."<br>";
					       mysqli_query($conexion, "update admi set usuario='$_REQUEST[usuarionuevo]' where usuario='$_REQUEST[usuarioviejo]'") or die("Problemas en el select:".mysqli_error($conexion));

					echo "La contraseña fue cambiada"."<br>";
					       mysqli_query($conexion, "update admi set clave='$_REQUEST[clavenuevo]' where clave='$_REQUEST[claveviejo]'") or die("Problemas en el select:".mysqli_error($conexion));
       		?>
    </div><br><br>

		
<footer id="abajo">
	<center><p>​2017 © Copyright Medical center EPS. Todos los derechos reservados.<br> Condiciones de uso
​En Bogotá: 4854555 - Resto del País línea gratuita nacional 01 8000 1 14524 - Bogotá, Colombia</p></center>
</footer>
</body>
</html>

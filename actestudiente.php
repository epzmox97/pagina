<!DOCTYPE html>
<html>
<head>
	<title>Actualizaciones</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body bgcolor="black">

<center><h2>GESTION DE COMPUTADORES</h2></center>

<div id="cabeza">
	<ul>
		<a href="selecadministrativo.php"><li>INICIO</li></a>
		<a href="index.html"><li>LOGIN</li></a>
	</ul>
</div><br><br><br>
	<div id="prestamo">
		<center><h1>Actualizacion de estudiante</h1></center>
<center>
			<?php
       				error_reporting(0);
		$conexion=mysqli_connect("sql310.260mb.net","n260m_20748328","epz970203","n260m_20748328_computadores")
	or die("<h2>Problemas al conectar con el servidor</h2>");


					echo "El telefono fue modificado"."<br>";
					       mysqli_query($conexion, "update estudent set telefono='$_REQUEST[telefononuevo]' where telefono='$_REQUEST[telefonoviejo]'") or die("Problemas en el select:".mysqli_error($conexion));
					echo "La carrera fue modificada"."<br>";
					       mysqli_query($conexion, "update estudent set carrera='$_REQUEST[carreranueva]' where carrera='$_REQUEST[carreravieja]'") or die("Problemas en el select:".mysqli_error($conexion));
					echo "El semestre fue modificado"."<br>";
					       mysqli_query($conexion, "update estudent set semestre='$_REQUEST[semestrenuevo]' where semestre='$_REQUEST[semestreviejo]'") or die("Problemas en el select:".mysqli_error($conexion));
					
       
       		?></center>
    </div><br><br>

		
<footer id="abajo">
	<center><p>​2017 © Copyright Medical center EPS. Todos los derechos reservados.<br> Condiciones de uso
​En Bogotá: 4854555 - Resto del País línea gratuita nacional 01 8000 1 14524 - Bogotá, Colombia</p></center>
</footer>
</body>
</html>

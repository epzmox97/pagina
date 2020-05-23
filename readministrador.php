<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8" content="text/html">

</head>
<body bgcolor="black">
<center><h2>GESTION DE COMPUTADORES</h2></center>

<div id="cabeza">
	<ul>
		<a href="selecadministrativo.php"><li>INICIO</li></a><br>
		<a href="index.html"><li>LOG OUT</li></a>
	</ul>
</div><br><br><br>
	<div id="prestamo">
		
		<center><h1>Registro administrador</h1>
			<form action="readministrador.php" method="post">
				<input type="text" name="documento" placeholder="Nºdocumento"><br><br>
				<input type="text" name="nombre" placeholder="nombre"><br><br>
				<input type="text" name="apellido" placeholder="apellido"><br><br>
				<input type="text" name="usuario" placeholder="Username"><br><br>
				<input type="password" name="clave" placeholder="password"><br><br>
				
				
				
				


				
				<center><input type="submit" value="Registrar" id="submit" name="submit"></center></br></br>

				<?php  
                error_reporting(0);
                   $conexion=mysqli_connect("sql310.260mb.net","n260m_20748328","epz970203","n260m_20748328_computadores")
	or die("<h2>Problemas al conectar con el servidor</h2>");

				mysqli_query($conexion,"insert into admi(documento,nombre,apellido,usuario,clave) values ($_REQUEST[documento],'$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[usuario]','$_REQUEST[clave]')") or die("".mysql_error($conexion));


				mysqli_close($conexion);
				echo ("<h1>Nueva administrador registrado </h1>");

				?>
				
			</form>
		</center>
		
		
	</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8" content="text/html">

</head>
<body bgcolor="black">
<center><h2>GESTION DE COMPUTADORES</h2></center>

<div id="cabeza">
	<ul>
		<a href="index.html"><li>LOGIN</li></a>
	</ul>
</div><br><br><br>
	<div id="prestamo">
		
		<center><h1>Registro de estudiante</h1>
			<form action="restudiante.php" method="post">
				<input type="text" name="documento" placeholder="Nº documento"><br><br>
				<input type="text" name="nombre" placeholder="Nombre"><br><br>
				<input type="text" name="apellido" placeholder="Apellido"><br><br>
				<input type="text" name="telefono" placeholder="Telefono"><br><br>
				<input type="text" name="carrera" placeholder="carreara"><br><br>
				<input type="text" name="semestre" placeholder="semestre"><br><br>
                                <input type="text" name="usrname" placeholder="username"><br><br>
                                <input type="password" name="claveu" placeholder="password"><br><br>


				
				<center><input type="submit" name="Registrar" id="submit" name="submit"></center></br>
</br>
</br>


				<?php
				error_reporting(0);  
$conexion=mysqli_connect("sql310.260mb.net","n260m_20748328","epz970203","n260m_20748328_computadores")
	or die("<h2>Problemas al conectar con el servidor</h2>");


				mysqli_query($conexion,"insert into estudent(documento,nombre,apellido,telefono,carrera,semestre,usrname,claveu) values ($_REQUEST[documento],'$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[telefono]','$_REQUEST[carrera]','$_REQUEST[semestre]','$_REQUEST[usrname]','$_REQUEST[claveu]')") or die("".mysql_error($conexion));


				mysqli_close($conexion);
				echo ("<h1>Nuevo estudiante registrado </h1>");

				?>
				
			</form>
		</center>
		
		
	</div>

</body>
</html>
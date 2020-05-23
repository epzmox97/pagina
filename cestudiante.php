<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8" content="text/html">
	<style>
</style>

</head>
<body bgcolor="black">
<center><h2>GESTION DE COMPUTADORES</h2></center>

<div id="cabeza">
	<ul>
		<a href="selecadministrativo.php"><li>INICIO</li></a>
		<a href="index.php"><li>LOGIN</li></a>
	</ul>
</div><br><br><br>
	<div id="prestamo">
		
		
		<center>
		<h1>Consulta de estudiante</h1><br>

		<form action="cestudiante.php" method="post" name="formulario">
			<h3>Ingrese numero de identidad:</h3>
				<input type="text" name="documento" placeholder="numero identidad"><br><br>
                                 <input type="submit" value="Consultar"></br>
</br>
</br>

				<?php  
				error_reporting(0);
						$conexion=mysqli_connect("sql310.260mb.net","n260m_20748328","epz970203","n260m_20748328_computadores")	or die("<h2>Problemas al conectar con el servidor</h2>");
						
						$mostrar=mysqli_query($conexion,"select documento,nombre,apellido,telefono,carrera,semestre from estudent where documento=$_REQUEST[documento]") or die("".mysql_error($conexion));

						if ($reg=mysqli_fetch_array($mostrar)) {

							echo "<b>N.documento: </b>".$reg['documento']."<br><br>";
							echo "<b>Nombre: </b>".$reg['nombre']."<br><br>";
							echo "<b>Apellidos: </b>".$reg['apellido']."<br><br>";
							echo "<b>Telefono: </b>".$reg['telefono']."<br><br>";
							echo "<b>Carrera: </b>".$reg['carrera']."<br><br>";
							echo "<b>Semestre: </b>".$reg['semestre']."<br><br>";
							
							
						}else{
							echo "No existe estudiante con ese numero de documento";
						}

						mysqli_close($conexion);
					?>
				</form>
			</center>
		
	</div>

</body>
</html>
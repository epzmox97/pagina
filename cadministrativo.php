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
		<a href="selecadministrativo.php"><li>INICIO</li></a><br><br>
		<a href="index.php"><li>LOG OUT</li></a>
	</ul>
</div><br><br><br>
	<div id="prestamo">
		
		
		<center>
		<h1>Consulta de administrador</h1>
		<form action="cadministrativo.php" method="post" name="formulario">
	

			<h3>Ingrese numero de identidad:</h3>
				<input type="text" name="documento" placeholder="numero identidad"></br></br></br>


					<center><input type="submit" value="Consultar"></center>
</br>
</br>
</br>

				<?php  
				error_reporting(0);
								$conexion=mysqli_connect("sql310.260mb.net","n260m_20748328","epz970203","n260m_20748328_computadores")	or die("<h2>Problemas al conectar con el servidor</h2>");
						$mostrar=mysqli_query($conexion,"select documento,nombre,apellido,usuario from admi where documento=$_REQUEST[documento]") or die("".mysql_error($conexion));

						if ($reg=mysqli_fetch_array($mostrar)) {

							echo "<b>N.documento: </b>".$reg['documento']."<br>";
							echo "<b>Nombre: </b>".$reg['nombre']."<br>";
							echo "<b>Apellidos:</b> ".$reg['apellido']."<br>";
							echo "<b>Username: </b>".$reg['usuario']."<br>";
							
							
							/*header('cestudiante.php');*/
						}else{
							echo "No existe administrador con ese numero de documento";
						}

						mysqli_close($conexion);
					?>
			</form>	
			</center>
		
	</div>

</body>
</html>
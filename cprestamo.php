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
		<a href="selecadministrativo.php"><li>INICIO</li></a>
		
		<a href="index.html"><li>LOG OUT</li></a>
	</ul>
</div><br><br><br>
	<div id="prestamo">
		
		
		<center>
		<h1>Consulta de prestamo</h1>
		<form action="cprestamo.php" method="post" name="formulario">
	
				<input type="text" name="codprestamo" placeholder="codigo prestamo"></br>
</br>

                
                
                
					<center><input type="submit" value="Consultar"></center>
</br>
</br>
</br>

				<?php  		 
				error_reporting(0);
				$conexion=mysqli_connect("sql310.260mb.net","n260m_20748328","epz970203","n260m_20748328_computadores") or die("<h2>Problemas al conectar con el servidor</h2>");
						
						$mostrar=mysqli_query($conexion,"select * from prestamo where codprestamo=$_REQUEST[codprestamo]") or die("".mysql_error($conexion));

						if ($reg=mysqli_fetch_array($mostrar)) {


							echo "<b>Codigo p: </b>".$reg['codprestamo']."<br>";
							echo "<b>Nombre: </b>".$reg['nombre']."<br>";
							echo "<b>Apellidos: </b>".$reg['apellido']."<br>";
							echo "<b>Documento: </b>".$reg['documento']."<br>";
							echo "<b>Carrera: </b>".$reg['carrera']."<br>";
							echo "<b>Sede: </b>".$reg['sede']."<br>";
							echo "<b>laboratorio: </b>".$reg['laboratorio']."<br>";
							echo "<b>Equipo: </b>".$reg['equipo']."<br>";
							echo "<b>Hora:</b> ".$reg['horar']."<br>";
							
							
						}else{
							echo "No existe prestamo con ese codigo";
						}

						mysqli_close($conexion);
					?>
			</form>	
			</center>
		
	</div>

</body>
</html>


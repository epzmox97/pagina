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
</div>
	<div id="prestamo">
		<center><h1>Actualizacion de estudiante</h1></center>

				<?php
				error_reporting(0);
		$conexion=mysqli_connect("sql310.260mb.net","n260m_20748328","epz970203","n260m_20748328_computadores")
	or die("<h2>Problemas al conectar con el servidor</h2>");
            
					$registros=mysqli_query($conexion,"select telefono,carrera,semestre from estudent where documento=$_REQUEST[documento]") or die("Problemas en el select:".mysqli_error($conexion));
					if ($reg=mysqli_fetch_array($registros)){
				?>	
		       
			
		     <h2>Actualizar telefono</h2>
	<center>	<form action="actestudiente.php" method="post">
				Ingrese nuevo telefono:
				<input type="text" name="telefononuevo" value="<?php 
				echo $reg['telefono'] ?>"><br>
				<input type="hidden" name="telefonoviejo" value="<?php 
				echo $reg['telefono'] ?>"><br>
				<input type="submit" value="Modificar">
			</form>
		        <h2>Actualizar carrera</h2>
			<form action="actestudiente.php" method="post">
				Ingrese nueva carrera:
				<input type="text" name="carreranueva" value="<?php 
				echo $reg['carrera'] ?>"><br>
				<input type="hidden" name="carreravieja" value="<?php 
				echo $reg['carrera'] ?>"><br>
				<input type="submit" value="Modificar">
			</form>
		        <h2>Actualizar semestre</h2>
			<form action="actestudiente.php" method="post">
				Ingrese nuevo semestre:
				<input type="text" name="semestrenuevo" value="<?php 
				echo $reg['semestre'] ?>"><br>
				<input type="hidden" name="semestreviejo" value="<?php 
				echo $reg['semestre'] ?>"><br>
				<input type="submit" value="Modificar">
			</form>
			</center>		
		        
			<?php
			}
			else
				echo "No existe tal estudiante";
		           ?><br><br>
    </div><br><br>



<footer id="abajo">
	<center><p>​2017 © Copyright Medical center EPS. Todos los derechos reservados.<br> Condiciones de uso
​En Bogotá: 4854555 - Resto del País línea gratuita nacional 01 8000 1 14524 - Bogotá, Colombia</p></center>
</footer>
</body>
</html>
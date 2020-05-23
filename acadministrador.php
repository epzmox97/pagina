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
		<a href="index.php"><li>LOGIN</li></a>
	</ul>
</div>
	<div id="prestamo">
		<center><h1>Actualizacion de administrador</h1></center>

				<?php
				error_reporting(0);
            		$conexion=mysqli_connect("sql310.260mb.net","n260m_20748328","epz970203","n260m_20748328_computadores")	or die("<h2>Problemas al conectar con el servidor</h2>");                    
					$registros=mysqli_query($conexion,"select usuario,clave from admi where documento=$_REQUEST[documento]") or die("Problemas en el select:".mysqli_error($conexion));
					if ($reg=mysqli_fetch_array($registros)){
				?>	
		       
			<center>
		     <h2>Actualizar usuario</h2>
			<form action="actadministrador.php" method="post">
				Ingrese nuevo usuario:
				<input type="text" name="usuarionuevo" value="<?php 
				echo $reg['usuario'] ?>"><br>
				<input type="hidden" name="usuarioviejo" value="<?php 
				echo $reg['usuario'] ?>"><br>
				<input type="submit" value="Modificar">
			</form>
			<br>
			<form action="actadministrador.php" method="post">
				Ingrese nueva contraseña:
				<input type="text" name="clavenuevo" value="<?php 
				echo $reg['clave'] ?>"><br>
				<input type="hidden" name="claveviejo" value="<?php 
				echo $reg['clave'] ?>"><br>
				<input type="submit" value="Modificar">
			</form>
		    
				
		        
			<?php
			}
			else
				echo "No existe tal administrador";
		           ?><br><br>
    </div><br><br>

</center>

<footer id="abajo">
	<center><p>​2017 © Copyright Medical center EPS. Todos los derechos reservados.<br> Condiciones de uso
​En Bogotá: 4854555 - Resto del País línea gratuita nacional 01 8000 1 14524 - Bogotá, Colombia</p></center>
</footer>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>R.COMPUTER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body onload="javascript: document.form1.sede.selectedIndex=-1,document.form1.laboratorio.selectedIndex=-1,document.form1.computador.selectedIndex=-1">
<center><h2>GESTION DE COMPUTADORES</h2></center>

<div id="cabeza">
	<ul>
		<a href="inicio.html">inicio</a><li> 
		         LOG OUT</li></a>
	</ul>
</div><br><br><br>
	<div id="prestamo">
		
		<br>
		<br>
		<center>
		<h1>PRESTAMO</h1><br>
<?php 
              $conexion=mysqli_connect("sql310.260mb.net","n260m_20748328","epz970203","n260m_20748328_computadores")or die("<h2>Problemas al conectar con el servidor</h2>");       

              $consulta=mysqli_QUERY("SELECT nombre,apellido,documento,carrera FROM estudent",$conexion1);
              $registros=mysqli_fetch_row($consulta);	
 ?>

		<form action="prestamo.php" method="post" name="form1">
			<input type="text" class="textbox" name="codprestamo" placeholder="Idprestamo" ></input><br><br>
			<input type="text" class="textbox" name="nombre" placeholder="nombre" value="<?php echo $registros['nombre']?>"><br><br>
			<input type="text" class="textbox" name="apellido" placeholder="apellido" value="<?php echo $registros['apellido']?>"><br><br>
			<input type="text" class="textbox" name="documento" placeholder="documento" value="<?php echo $registros['documento']?>"><br><br>
			<input type="text" class="textbox" name="carrera" placeholder="carrera" value="<?php echo $registros['carrera']?>"><br><br>
                        <input type="text" class="textbox" name="sede" placeholder="sede"><br><br>
<input type="text" class="textbox" name="laboratorio" placeholder="laboratorio"><br><br>
<input type="text" class="textbox" name="equipo" placeholder="equipo"><br><br>			
			<br><br>
			<input type="submit" value="Prestamo" id="submit" name="submit"></input>

			<?php  	
				error_reporting(0);
              $conexion=mysqli_connect("sql310.260mb.net","n260m_20748328","epz970203","n260m_20748328_computadores")or die("<h2>Problemas al conectar con el servidor</h2>");       
				
					mysqli_QUERY($conexion,"insert into prestamo(codprestamo,nombre,apellido,documento,carrera,sede,laboratorio,equipo) values ('$_REQUEST[codprestamo]','$_REQUEST[nombre]','$_REQUEST[apellido]',$_REQUEST[documento],'$_REQUEST[carrera]','$_REQUEST[sede]','$_REQUEST[laboratorio]',$_REQUEST[equipo])") or die("".mysql_error($conexion));


					mysqli_close($conexion);
					echo ("<h1>Prestamo satisfactorio</h1>");

			?>

		</form>
	
			
		</center>
	</div>

</body>
</html>



		
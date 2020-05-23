<?php
	$usrname=$_POST['usrname'];
	$claveu=$_POST['claveu'];


$conexion=mysqli_connect("sql310.260mb.net","n260m_20748328","epz970203","n260m_20748328_computadores")	or die("<h2>Problemas al conectar con el servidor</h2>");

	$consulta="SELECT * FROM estudent WHERE usrname='$usrname' and claveu='$claveu'";
	$resultado=mysqli_query($conexion,$consulta);

	$filas=mysqli_num_rows($resultado);
	if($filas>0){


		header('location:prestamo.php');
	}else{
		echo "error en la autenticacion";
	}
	mysqli_free_result($resultado);
	msqli_close();
?>
<<?php 


 ?>
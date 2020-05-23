<!DOCTYPE html>
<html>
<head>
	<title>R.COMPUTER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8" content="text/html">
</head>
<body bgcolor="black">
<center><h2>GESTION DE COMPUTADORES</h2></center>

<div id="cabeza">
	<ul>
		<a href="inicio.html"><li>INICIO</li></a>		
	</ul>
</div><br><br><br>
	<div id="inicio">
		<br>
		<br>
		<center>
		<h1>LOGIN</h1><br>

		<form action="validacion.php" method="post">
			
			<input type="text" class="textbox" name="usuario" placeholder="Usuario"></input><br><br>
			<input type="password" class="textbox" name="clave" placeholder="contraseña"></input>
			<br><br>


			
			<input type="submit" value="Ingresar" id="submit" name="submit"></input>
		</form>
		</center><br><br><br>
	</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8" content="text/html">
	<style>
.vertical-menu {

    

		top:50%;
		left:50%;
		width:200px;
		margin-left:-200px;
		height:300px;
		margin-top:-150px;
		padding:5px;
		margin: 0px auto;


}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
    text-align: center;
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: ;
    color: white;
}
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
	<div id="inicio">
		
		
		<center>
		<h1>Que quieres registrar?</h1><br>

		<br><br>
			<div class="vertical-menu">
  				<a href="restudiante.php" >Estudiante</a>
  				<a href="rdocente.php">Docente</a>
  				<a href="readministrador.php">Administrador</a>

			</div>
		</center>
	</div>

</body>
</html>
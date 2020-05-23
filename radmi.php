<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="stylep.css">
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
		<a href="inicio.html"><li>INICIO</li></a>
		<a href="prestamo.php"><li>PRESTAMOS</li></a>
		<a href="registro.php"><li>REGISTROS</li></a>
		<a href="index.php"><li>LOGIN</li></a>
	</ul>
</div><br><br><br>
	<div id="prestamo">
		
		<center><h1>Registro administrador</h1>
			<form action="radministrador.php" method="post">
				*<input type="text" name="documento" placeholder="Nºdocumento"><br><br>
				<input type="text" name="nombre" placeholder="nombre"><br><br>
				<input type="text" name="apellido" placeholder="apellido"><br><br>
				*<input type="text" name="usuario" placeholder="Username"><br><br>
				*<input type="password" name="clave" placeholder="password"><br><br>
				*<input type="password" name="conclave" placeholder="confirmar"><br><br>
				
				
				
				


				
				<center><input type="submit" name="Registrar" id="submit" name="submit"></center></br></br>

				<?php  
                $doc=$_POST['documento'];
                $nom=$_POST['nombre'];
                $apel=$_POST['apellido'];
                $usu=$_POST['usuario'];
                $clav=$_POST['clave'];
                $concla=$_POST['conclave'];
                $rec= sterln($doc)*sterln($usu)*sterln($clav)*sterln($concla);
                if($rec>0){
                    
                    if($clav===$concla){
                        
                        $conexion=mysqli_connect("sql310.260mb.net","n260m_20748327","97091018","n260m_20748327_prueba2")or die("<h2>Problemas al conectar con el servidor</h2>");
                        
                        clave=md5(clave);
    			        mysqli_query($conexion,"insert into admi(documento,nombre,apellido,usuario,clave) values ($_REQUEST[documento],'$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[usuario]','$_REQUEST[clave]')") or die("".mysql_error($conexion));
                        
                    }else{
                        echo 'Las contraseñas no son identicas';
                    }
                    
                }else{
                    echo 'Por favor rellene todos los campos obligatorios';
                }
            
					
                
                    
                    
				/*$clave=$_POST['clave'];
				$conclave=$_POST['conclave'];

				if ($clave=$conclave){
					mysqli_close($conexion);
				    echo ("<h1>Nueva administrador registrado </h1>");
				}else{
					echo "Las contraseñas no coinciden";
					header('location:radministrador.php');
				}
				*/

				mysqli_close($conexion);
				echo ("<h1>Nueva administrador registrado </h1>");

				?>
				
			</form>
		</center>
		
		
	</div>

</body>
</html>
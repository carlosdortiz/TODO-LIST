<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
</head>
<body>
	<?php 
	$server="localhost";
	$usuario = "root";
	$contraseña = "";
	$bd="ejemplo";

	$conexion= mysqli_connect($server,$usuario,$contraseña, $bd)
	 or die ("error en la conexion");

	 $clave =$_POST['txtClave'];
	 $tarea =$_POST['txtTarea'];
	 $completado = "No";

	 $insertar= "INSERT into datos values ('$clave', '$tarea', '$completado') ";

	 $resultado = mysqli_query($conexion, $insertar)
	 or die ("error");

	 mysqli_close($conexion);
	 echo "Datos insertados";






	 ?>

</body>
</html>
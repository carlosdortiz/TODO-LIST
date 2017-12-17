<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
	<?php 
	$server="localhost";
	$usuario = "root";
	$contraseña = "";
	$bd="ejemplo";

	$conexion= mysqli_connect($server,$usuario,$contraseña, $bd)
	 or die ("error en la conexion");

	 $clave = $_POST['txtClave'];

	 mysqli_query($conexion,"DELETE  from datos where clave ='$clave'")
	 or die("error eliminar datos");
	 mysqli_close($conexion);
	 echo "datos eliminados";



	 ?>

</body>
</html>
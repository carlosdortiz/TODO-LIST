<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	 $tarea = $_POST['txtTarea'];
	 $completado = $_POST['cmbCompletado'];

	 mysqli_query($conexion, "UPDATE datos set tarea ='$tarea' where clave='$clave'")
	 or die ("error al actualizar");

	 mysqli_query($conexion, "UPDATE datos set completado ='$completado' where clave='$clave'")
	 or die ("error al actualizar");

	 mysqli_close($conexion);
	 echo"datos actualizados";





	 ?>

</body>
</html>
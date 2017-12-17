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

	 $consulta = mysqli_query($conexion, "SELECT * from datos")
	  or die("error al traer datos");

	  echo'<table border "1">';
	  echo '<tr>';
	  echo '<th id= "clave">Clave</th>';
	  echo '<th id= "tarea">Tarea</th>';
	  echo '<th id= "completado">Completado</th>';
	  echo '<tr/>';

	  while($extraido = mysqli_fetch_array($consulta))
	  {
	  echo '<tr>';
			echo '<td>'.$extraido['clave'].'</td>';
			echo '<td>'.$extraido['tarea'].'</td>';
			echo '<td>'.$extraido['completado'].'</td>';
			echo '</tr>';
		}
		mysqli_close($conexion);
		echo '</table>';

	 




	 ?>

</body>
</html>
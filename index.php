<!DOCTYPE html>
<html>
<head>
	<title>Tutoriales</title>
</head>
<body>
<form action="Registro.php" method="POST">
	Clave: <input type="text" name="txtClave"> <br/>
	Tarea: <input type="text" name="txtTarea"> <br/>
	<input type="submit" value="Registrar" name="btnRegistrar">


</form>
<p>..............................................................</p>

	<form action="eliminar.php" method="POST">
		Clave:  <input type="text" name="txtClave"> <br/>
		<input type="submit" value = "Eliminar tarea" name="btnEliminar">
	</form>

	<p>..............................................................</p>

	<form action="actualizar.php" method="POST">
		Clave: <input type="text" name="txtClave"> <br/>
		Tarea: <input type="text" name="txtTarea"> <br/>
		Completado:
			<select name="cmbCompletado">			
				<option value="No">No</option>
				<option value="Si">Si </option>
			</select> <br/>
		<input type="submit" value="Actualizar Tarea" name="btnActualizar">		
	</form>
<p>..............................................................</p>

<form action = "Registros.php" >
	<input type="submit" value="Ver Registros" name="btnRegistros">
	

</form>



</body>
</html>
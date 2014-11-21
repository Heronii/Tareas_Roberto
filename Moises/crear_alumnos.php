<?php

$titulo = "Crear Alumno";
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title> <?php echo $titulo; ?> </title>
</head>


<body>
		<h1> <?php echo $titulo; ?> </h1>
		
		<?php include_once ('menu.php');?>
		
			
		<form action="insertar_alumno.php" method="POST">
		

			<label for="nombre">Nombre</label>
		<input type="text" name="nombre" value="" id="nombre">
		
			<label for="apellido_paterno">Apellido Paterno</label>
		<input type="text" name="apellido_paterno" value="" id="nombre">
		
			<label for="apellido_materno">Apellido Materno</label>
		<input type="text" name="apellido_materno" value="" id="nombre">
		
			<label for="edad">Edad</label>
		<input type="text" name="edad" value="" id="nombre">
		
			<label for="cuenta">Cuenta</label>
		<input type="text" name="cuenta" value="" id="nombre">
		
			<label for="telefono">Teléfono</label>
		<input type="text" name="telefono" value="" id="nombre">
		
			<label for="direccion">Dirección</label>
		<input type="text" name="direccion" value="" id="nombre">

		
		
		<p><input type="submit" value="Continuar"></p>
		
		</form>

</body>
</html>
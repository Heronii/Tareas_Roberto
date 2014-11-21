<?php
include_once ('conexion.php');
$titulo= "Detalla del Alumno";
$URL = $_GET['id'];
$Alumnos = mysql_query("SELECT * FROM Alumnos WHERE id = $URL");
?>


<!DOCTYPE HTML>
<html>
<head>
	<title> <?php echo $titulo; ?> </title>
	<meta charset="utf-8">
</head>

<body>

	<h1> <?php echo $titulo; ?> </h1>
	
	
	<?php include_once('menu.php');?>
	
	<table>
		<tbody>
			<tr>
				<th>ID</th>
				<th>NOMBRE COMPLETO</th>
				<th>No. DE CUENTA</th>
				<th>TELÉFONO</th>
				<th>DIRECCIÓN</th>
				<th>VER MÁS</th>
			</tr>
		
			
	
	<?php
	
	
	
	while ($row = mysql_fetch_array($Alumnos)){
		echo"<tr>";
		echo "<td>".$row['id'] . "</td>";
		echo "<td>".$row['nombre']." ".$row['apellido_materno']." ".$row['apellido_materno']."</td>";
		echo "<td>".$row['edad']."</td>"; 
		echo "<td>".$row['cuenta']."</td>";
		echo "<td>".$row['telefono']."</td>";
		echo "<td>".$row['direccion']."</td>";
		echo "<td><a href='detalle_alumnos.php?id=".$row['id']."'> Ver Más</a></td>";
		echo "</tr>";
		
	}
	?>
	
	</table>

</body>

</html>
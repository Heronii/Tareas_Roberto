<?php
include_once ('conexion.php');
$titulo= "Licenciaturas";
$licenciaturas = mysql_query("SELECT * FROM licenciaturas WHERE id= 3");
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
	
	<?php
	
	while ($row = mysql_fetch_array($licenciaturas)){
		echo "<h3>".$row['nombre']."</h3>";
		
	}
	?>

</body>

</html>
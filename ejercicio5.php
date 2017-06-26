<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio cinco</title>
</head>
<body>
<?php 
if(isset($_GET["numero"]) && is_numeric($_GET["numero"]))
{
	$numero =$_GET["numero"];
}
else
{
	$numero = 0;
}


echo "Tabla de multiplicar <br>";
for ($contador=1; $contador <= 10 ; $contador++) { 
	# code...
	$resultado = $numero*$contador;
	echo $numero.' X '.$contador.' = '.$resultado;
	echo '<br>';
}
 ?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio ocho</title>
</head>
<body>
<?php 
$resultado=1;
$numero =5;
 for ($cont= 1; $cont <= $numero ; $cont++) { 
 	# code...
 	#echo $numero.' X ';
 	#$resultado = $resultado* $numero;
 	$resultado = $resultado*$cont;
 	
 }
 echo "El factorial de ".$numero." es ".$resultado;
 ?>
</body>
</html>
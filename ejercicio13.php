<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio trece</title>
</head>
<body>
<?php 
$numeros = array();
for ($i=0; $i <100 ; $i++) { 
	#array_push($numeros, $i);
	$numeros[]=$i;
}
var_dump($numeros);
 ?>
</body>
</html>
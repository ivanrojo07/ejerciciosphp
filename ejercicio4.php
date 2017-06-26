<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio cuatro</title>
</head>
<body>
<?php 
$numero =1;
$contador=1;
while ($contador <= 20) {
	$numero *= $contador;
	$contador ++;

	echo 'Contador: '.($contador-1).' ';
	echo $numero.'<br/>';
	

}

echo "El resultado de multiplicar los 20 primeros numeros es: ".$numero;
 ?>

</body>
</html>
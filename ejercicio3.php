<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio dos</title>
</head>
<body>
<?php 

for ($numero=1; $numero <= 30 ; $numero++) { 
	
	$cuadrado = $numero* $numero;
	echo $numero.'cuadrado: '.$cuadrado.' ';
	if($cuadrado%2 ==0)
	{
		echo 'es numero par';
	}
	else
	{
		echo 'es numero impar';
	}

	echo '<br>';
}
 ?>

</body>
</html>
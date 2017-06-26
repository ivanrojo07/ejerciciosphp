<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 17</title>
</head>
<body>
<?php 
function factorial($numero)
{
	$resultado=1;
	for ($cont=$numero; $cont > 0 ; $cont--) { 
		# code...
		echo $cont.' X ';
		$resultado = $resultado*$cont;
	}
	return ' = '.$resultado;
}

$funcion = factorial(5);
echo $funcion;

$dato=6;
echo 'el factorial de '.$dato.' es ';
echo factorial($dato);
?>
</body>
</html>
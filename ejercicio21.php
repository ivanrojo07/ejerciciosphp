<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio veintiuno</title>
</head>
<body>
<?php
function multiplicar($numero){
	$tabla = array();
	for ($i=1; $i <= 10 ; $i++) { 
		# code...
		$resultado = $numero*$i;
		echo $numero.' X '.$i;		
		$tabla[] = $resultado;
		echo " = ".$resultado .'<br>';

	}
	return $tabla;

}

multiplicar(7);

?>
</body>
</html>
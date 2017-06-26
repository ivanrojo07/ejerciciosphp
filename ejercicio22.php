<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio veintidos</title>
</head>
<body>
<?php
function multiplicar($numero, $html =null){
	$tabla = array();
	if ($html != null) {
		for ($i=1; $i <= 10 ; $i++) { 
		# code...
		$resultado = $numero*$i;
		echo $numero.' X '.$i;		
		$tabla[] = $resultado;
		echo " = ".$resultado .'<br>';


	}
	
		return $tabla;
	}
	

}
multiplicar(5, true);
?>

</body>
</html>
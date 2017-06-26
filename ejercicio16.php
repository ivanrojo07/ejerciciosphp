<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 16</title>
</head>
<body>
<?php 
$arreglo = array(
	'Frutas' => array('Manzana', 'Naranja', 'Sandia', 'Fresa'),
	'Deportes'=> array('Futbol', 'Tenis', 'Baloncesto', 'Beisbol'),
	'Idiomas'=>array('Español', 'Ingles', 'Frances', 'Italiano')
	 );
foreach ($arreglo as $columna => $valores) {
	echo $columna.'<br>{<br>';
	foreach ($valores as $valor) {
		# code...
		echo $valor.'<br>';
	}
	echo "}<br>";
	
}
var_dump($arreglo);

?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio once</title>
</head>
<body>
<?php 
/*hacer un programa que tenga un array de 5 numeros enteros y hacer lo siguiente con el:
1.-Recorrerlo y mostrarlo
2.-Ordenarlo y mostrarlo
3.-Mostrara su longitud
4.Buscar en el vector
*/
$numeros = array(5,4,3,2,1);

foreach ($numeros as $numero) {
	# code...
	echo $numero.', ';
}
echo "<br>Ordenar y mostrar";
//ordenar
sort($numeros);
foreach ($numeros as $numero) {
	# code...
	echo $numero.', ';
}
echo "<br> longitud del array: ".count($numeros);

//buscar
echo "<br>buscar en el array: ";
if(!array_search(5, $numeros))
{
	echo "El numero no existe en el array";
}
else{
	echo "El numero si existe";
}

 ?>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio quince</title>
</head>
<body>
<?php
$array = array('array', 3);
$string = "hola";
$boleano = TRUE;
if (is_array($array)) {
	# code...
	echo "Es un array <br>";
}
if (is_string($string)) {
	# code...
	echo "Es un string <br>";
}
if (is_bool($boleano)){
	echo "Es un booleano";
}
?>
</body>
</html>
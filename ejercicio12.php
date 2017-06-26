<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio doce</title>
</head>
<body>
<?php 
/*Escribe un programa que muestre la direccion IP del usuario que visita nuestra web y si usa Chrome decirle felicidades*/
$ip = $_SERVER['REMOTE_ADDR'];
$navegador = $_SERVER['HTTP_USER_AGENT'];
echo 'Tu IP es: '.$ip.'<br>';

if (strstr($navegador, 'Chrome')==true) {
	# code...
	echo "El navegador que usas es chrome";
}
else{
	echo "No usas chrome";
} ?>


</body>
</html>
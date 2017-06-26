<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio veinte</title>
</head>
<body>
<?php
if (isset($_GET["email"])) {
	# code...
	$email = $_GET["email"];

}
else
{
	$email='';
}
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	# code...
	echo "Es un correo valido";
}
else{
	echo "Es un correo invalido";
}
?>
</body>
</html>
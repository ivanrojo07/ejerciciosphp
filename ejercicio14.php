<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio catorce</title>
</head>
<body>
<?php
$variable= "";
if (empty($variable)) {
	# code...
	$variable="Texto de relleno";
	echo "<strong>".strtoupper($variable).'<string>';
}
else {
	echo "Esta relleno";
}
?>
</body>
</html>
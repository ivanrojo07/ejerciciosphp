<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio veintitres</title>
</head>
<body>
<?php
session_start();	
if (!isset($_SESSION["numero"])) {
	# code...
	$_SESSION["numero"]=0;
}


if (isset($_GET["counter"]) && $_GET["counter"]==1) {
	# code...
	$_SESSION["numero"]++;
}
elseif(isset($_GET["counter"]) && $_GET["counter"]==0) {
	$_SESSION["numero"]--;
}

echo "Sesion numero: ".$_SESSION["numero"];
?>
</body>
</html>
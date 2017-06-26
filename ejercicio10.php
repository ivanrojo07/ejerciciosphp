<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio diez</title>
</head>
<body>
<?php 
if(isset($_GET["numero"]) && is_numeric($_GET["numero"]))
{
	$numero =$_GET["numero"];
}
else
{
	$numero = 0;
}

for ($i=1; $i <=100 ; $i++) { 
	# code...
	if ($i%$numero ==0) {
		# code...
		echo $i." es multiplo de ".$numero."<br>";
	}

}
 ?>
</body>
</html>
<?php
if (isset($_POST["submit"])) {
	# code...
	var_dump($_POST);
	if (!empty($_POST["nombre"]) && strlen($_POST["nombre"]) <=20 && !is_numeric($_POST["nombre"]) && !preg_match("/[0-9]/", $_POST["nombre"])) {
		# code...
		echo $_POST["nombre"]."<br>";
	}
	if (!empty($_POST["apellidos"]) && !is_numeric($_POST["apellidos"]) && !preg_match("/[0-9]/", $_POST["apellidos"])) {
		# code...
		echo $_POST["apellidos"]."<br>";
	}
	if (!empty($_POST["bio"])) {
		# code...
		echo $_POST["bio"]."<br>";
	}
	if (!empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		# code...
		echo $_POST["email"]."<br>";
	}
	if (!empty($_POST["contraseña"]) && strlen($_POST["contraseña"])>=6) {
		# code...
		echo sha1($_POST["contraseña"])."<br>";
	}
	if (!empty($_POST["rol"])) {
		# code...
		echo $_POST["rol"]."<br>";
	}
	var_dump($_FILE["imagen"]);
	if(isset($_FILE["imagen"]) && !empty($_FILE["imagen"]))
	{
		echo "La imagen nos ha llegado";
	}
}
?>
<?php 
 include 'login-user.php';

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<h2>Iniciar sesion</h2>
<div><?php 
if (isset($_SESSION["error_login"])) {
	# code...
	echo "datos incorrectos";
}
 ?></div>
<form action='login-user.php' method="post">
	Email:<input type="email" name="email">
	Contraseña: <input type="password" name="password">
	<input type="submit" name="submit">

</form>
</body>
</html>
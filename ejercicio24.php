<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio veinticuatro</title>
</head>
<body>
<form action="recibir.php" method="post" enctype="multipart/form-data">
Name: <input type="text" name="nombre"><br><br>
Apellidos: <input type="text" name="apellidos"><br><br>
Biografía: <textarea name="bio" rows="5" cols="40"></textarea><br><br>
E-mail: <input type="text" name="email"><br><br>
Imagen: <input type="file" name="imagen"><br><br>
Contraseña: <input type="password" name="contraseña"><br><br>
Rol: <select name="rol">
	<option value="normal">Normal</option>
	<option value="admin">Administrador</option>
</select><br><br>
<input type="submit" name="submit">
</form>

</body>
</html>
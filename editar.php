<?php
require_once 'enviar.php';
$errors = [];
$conn = mysqli_connect('localhost', 'root', 'ivanrojo07@', 'cursophp');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function showError($errors, $campo){
	if (isset($errors[$campo])) {
		# code...
		$alert='<div>'.$errors[$campo].'</div>';
	}
	else
	{
		$alert = null;
	}
	return $alert;
}
function defaultValue($array, $campo, $textarea=false)
{
	if(isset($array) && count($array)>=1) {
		if ($textarea != false) {
			# code...
			echo $array[$campo];
		}
		else{
				# code...
	echo "value='".$array[$campo]."'";
		}

	}
}
//conseguir usuario
if (!isset($_GET["id"]) || empty($_GET["id"]) || !is_numeric($_GET["id"])) {
	# code...
	header("Location:index.php");

}
$id = $_GET["id"];
$user_query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario_id =".$id.";");
$user = mysqli_fetch_assoc($user_query);
if (!isset($user["usuario_id"]) || empty($user["usuario_id"])) {
	# code...
	header("Location:index.php");
}


//validar formulario
if (isset($_POST["submit"])) {
	# code...
	if (!empty($_POST["nombre"]) && strlen($_POST["nombre"]) <=20 && !is_numeric($_POST["nombre"]) && !preg_match("/[0-9]/", $_POST["nombre"])) {
		# code...
		$name_validate = true;
		
	}
	else
	{
		$name_validate = false;
		$errors["nombre"] ="El nombre no es valido";
	}
	if (!empty($_POST["apellidos"]) && !is_numeric($_POST["apellidos"]) && !preg_match("/[0-9]/", $_POST["apellidos"])) {
		# code...
		$apellido_validate = true;
	}
	else {
		$apellido_validate = false;
		$errors["apellidos"] ="El apellido no es valido";
	}
	if (!empty($_POST["bio"])) {
		# code...

		$bio_validate = true;

	}
	else
	{
		$bio_validate = false;
		$errors["bio"]= "Biografia no valida";
	}
	if (!empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		# code...
		
		$email_validate = true;
	}
	else
	{
		$email_validate = false;
		$errors["email"]="Email no valido";

	}
/*
	if (!empty($_POST["contrasena"]) && strlen($_POST["contrasena"])>=6) {
		# code...
		
		$contrasena_validate = true;
	}
	else
	{
		$contrasena_validate = false;
		$errors["contrasena"]="Contraseña invalida";
	}*/
	if (!empty($_POST["rol"])) {
		# code...
		$rol_validate = true;

	}
	else
	{

		$rol_validate = false;
		$errors["rol"]= "rol invalido";
	}
	//var_dump($_FILE["imagen"]);
	$imagen =null;
	if(isset($_FILES["imagen"]) && !empty($_FILES["imagen"]["tmp_name"]))
	{
		//$imagen_validate = true;
		if (!is_dir("uploads")) {
			# code...
			$dir=mkdir("uploads", 0777, true);
		}
		else{
			$dir=true;
		}
		if ($dir) {
			# code...
			$filename=time().$_FILES["imagen"]["name"];
			$muf = move_uploaded_file($_FILES["imagen"]["tmp_name"], "uploads/".$filename);
			$imagen =$filename;
			if($muf){
				$image_upload=true;
			}else{
				$errors["imagen"]= "la imagen no se ah subido";
				$image_upload=false;
			}
		}
	}
	else {
		$imagen_validate = false;
		$errors["imagen"]= "imagen no encontrada";
	}
	var_dump($errors);
	//modificar usuario en la base de datos
	if (count($errors)==0) {
		# code...
		$sql = "UPDATE usuarios SET nombre='".$_POST["nombre"]."' , apellidos='".$_POST["apellidos"]."' , biografia='".$_POST["bio"]."' , email='".$_POST["email"]."' ,";
		if (isset($_POST["contrasena"]) && !empty($_POST["contrasena"])) {
			# code...
			$sql .=" password='".sha1($_POST["contrasena"])."', ";
		}
		if (isset($_FILES["imagen"]) && !empty($_FILES["imagen"]["tmp_name"])) {
			# code...
			$sql.="imagen='".$imagen."', ";

		}
		
		$sql .=" role='".$_POST["rol"]."' where usuario_id=".$user["usuario_id"].";";
		

		if (mysqli_query($conn, $sql)) {
    	$user_query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario_id =".$id.";");
		$user = mysqli_fetch_assoc($user_query);
    	mysqli_close($conn);
		} else {
    	echo "Error creating table: " . mysqli_error($conn);
		}
		$update_user= true;
	}else{
		$update_user =false;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>actualizar usuario</title>
</head>
<body>
<h2>Editar usuario: <?php echo $user["nombre"]." ".$user["apellidos"]; ?></h2>
<?php if(isset($_POST["submit"]) && count($errors ==0) && $update_user = true){
	echo "<div> el usuario ah sido actualizado correctamente</div>";
	}elseif (isset($_POST["submit"])) {

		echo "<div> el usuario NO AH sido creado correctamente</div>";

		} ?>
<form action="" method="post" enctype="multipart/form-data">
Name: <input type="text" name="nombre" <?php defaultValue($user, "nombre") ?>>
<?php echo showError($errors,"nombre"); ?><br><br>
Apellidos: <input type="text" name="apellidos"<?php defaultValue($user, "apellidos")
 ?>><?php echo showError($errors,"apellidos"); ?><br><br>
Biografía: <textarea name="bio" rows="5" cols="40"><?php defaultValue($user, 'biografia', true) ?></textarea><?php echo showError($errors,"bio"); ?><br><br>
E-mail: <input type="text" name="email"<?php 
defaultValue($user, "email") ?>>
<?php echo showError($errors,"email"); ?><br><br>
Imagen: <input type="file" name="imagen">
<?php if ($user["imagen"] != null) {?>
	<br><img src="uploads/<?php echo $user["imagen"]; ?>" width="140">
<?php } ?>
<br><br>
Contraseña: <input type="password" name="contrasena" ><?php echo showError($errors,"contrasena"); ?><br><br>
Rol: <select name="rol">
	<option value="normal"<?php if ($user["role"] =="normal") {
		# code...
		echo "selected";
	} ?>>Normal</option>
	<option value="administrador" <?php if ($user["role"] =="administrador") {
		# code...
		echo "selected";
	} ?>>Administrador</option>
</select><?php echo showError($errors,"rol"); ?><br><br>
<input type="submit" name="submit">
</form>

</body>
</html>
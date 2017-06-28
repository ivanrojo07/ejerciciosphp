<?php 
include 'redirect.php';
#parametros
if (isset($_GET["id"])) {
	# code...
	$id = $_GET["id"];

}
else
{
	$id=null;
}
var_dump($_SESSION);
#conexion
$conn = mysqli_connect('localhost', 'root', 'ivanrojo07@', 'cursophp');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SESSION["logged"]["role"]== "administrador") {
	# code...
	$borrado = mysqli_query($conn, "DELETE FROM usuarios WHERE usuario_id =".$id.";");
	
	if ($borrado == true) {
	# code...
	header("Location:ejercicio29verusuarios.php");
}

}
else{
	header("Location:ejercicio29verusuarios.php");
}

 ?>

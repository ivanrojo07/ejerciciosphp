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
#conexion
$conn = mysqli_connect('localhost', 'root', 'ivanrojo07@', 'cursophp');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM usuarios WHERE usuario_id =". $id.";";
$resultado = mysqli_query($conn, $sql);
//var_dump($resultado);

while ($columna = $resultado->fetch_assoc()) {
	# code...
	echo "id: ".$columna["usuario_id"]."<br>".
		"nombre: ".$columna["nombre"]."<br>".
		"apellidos: ".$columna["apellidos"]."<br>".
		"biografia: ".$columna["biografia"]."<br>".
		"email: ".$columna["email"]."<br>".
		"password: ".$columna["password"]."<br>".
		"role: ".$columna["role"]."<br>".
		"imagen: <br><br><img src='uploads/".$columna["imagen"]."' width='140'><br>";
		
}
?>
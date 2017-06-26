<?php 

$conn = mysqli_connect('localhost', 'root', 'ivanrojo07@', 'cursophp');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT usuario_id, nombre, apellidos FROM usuarios;";

$listar_usuarios = mysqli_query($conn, $sql);
//var_dump($listar_usuarios);
$columnas = $listar_usuarios->num_rows;

if ($columnas >0) {
	echo "<table><tr><th>Nombre</th><th>Apellidos</th><th>accion</th></tr>";
	while ($columna = $listar_usuarios->fetch_assoc()) {
		# code...
		echo "<tr><td>".$columna["nombre"]."</td>".
		"<td>".$columna["apellidos"]."</td>
		<td><a href='ejercicio30.php?id=".$columna["usuario_id"]."'>ver</a></td></tr>";
	}
	echo "</table>";
}
else {
	# code...
	echo "Sin resultados";
}
$conn->close();
?>
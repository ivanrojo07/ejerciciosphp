
<!DOCTYPE html>
<html>
<head>
	<title>Ver usuarios</title>
</head>
<body>

<?php 
include 'redirect.php';
if (isset($_SESSION["logged"])) {
	# code...
	echo "<h1>BIENVENIDO: ".strtoupper($_SESSION["logged"]["nombre"])."</h1>";
	echo "<a href='formulario.php'>Crear Usuario</a><br><a href='logout.php'>cerrar sesion</a>";
}

$conn = mysqli_connect('localhost', 'root', 'ivanrojo07@', 'cursophp');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT usuario_id, nombre, apellidos FROM usuarios;";

$listar_usuarios = mysqli_query($conn, $sql);
//var_dump($listar_usuarios);
$columnas = $listar_usuarios->num_rows;
?>
<?php 
if ($columnas >0) {?>
<table><tr><th>Nombre</th><th>Apellidos</th><th colspan='3'>accion</th></tr>
<?php
$usuario_por_pagina= 3;
$pagina=false;

if ($_GET["pagina"]) {
	# code...
	$pagina = $_GET["pagina"];
}
if (!$pagina) {
	# code...
	$start =0;
	$pagina=1;
}
else{
	$start= ($pagina-1)*$usuario_por_pagina;
}
$total_paginas = intval(ceil($columnas/$usuario_por_pagina));

$sql ="SELECT * FROM usuarios ORDER BY usuario_id DESC LIMIT ".$start.",".$usuario_por_pagina.";";
$usuario = mysqli_query($conn, $sql);

	while ($columna = $usuario->fetch_assoc()) {
		# code...

		echo "<tr><td>".$columna["nombre"]."</td>".
		"<td>".$columna["apellidos"]."</td>
		<td><a href='ejercicio30.php?id=".$columna["usuario_id"]."'>ver</a></td><td><a href='editar.php?id=".$columna["usuario_id"]."'>editar</a></td>";
		if (isset($_SESSION["logged"]) && $_SESSION["logged"]["role"]=="administrador" ) {
			# code...
			echo "<td><a type='submit' onclick='return confirm('¿Estás seguro que deseas eliminar?')' href='borrar.php?id=".$columna["usuario_id"]."'>borrar</a></td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
else {
	# code...
	echo "Sin resultados";
}
for ($i=1; $i <= $total_paginas ; $i++) { 
	# code...
	echo "<a href='ejercicio29verusuarios.php?pagina=".$i."'>pagina ".$i."</a>";
}

$conn->close();
?>
</script>
</body>
</html>
<?php 

require_once 'conect.php';

$sql  = "CREATE TABLE IF NOT EXISTS usuarios (
		usuario_id int(255) auto_increment not_null,
		nombre varchar(50),
		apellidos varchar(255),
		biografia text,
		email varchar(255),
		password varchar(255),
		role varchar(255),
		imagen varchar(255),
		CONSTRAINT pk_usuarios PRIMARY KEY(usuarios_id)
		);";
$create_usuarios_table = mysqli_query($db, $sql);
if ($create_usuarios_table) {
	# code...
	echo "La tabla usuarios se ha creado correctamente";
}
else {
	# code...
	echo "Error al crear la tabla";
}

$sql="INSERT INTO usuarios set(null,'ivan', 'rojo', 'Programador', 'ivanrojo07@gmail.com', '".sha1('123456')."', 'administrador', null );";
mysqli_query($db, $sql);

?>
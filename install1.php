<?php 
// Create connection
$conn = mysqli_connect('localhost', 'root', 'ivanrojo07@', 'cursophp');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
		usuario_id int(255) auto_increment,
		nombre varchar(50),
		apellidos varchar(255),
		biografia varchar(255),
		email varchar(255),
		password varchar(255),
		role varchar(255),
		imagen varchar(255),
		CONSTRAINT pk_usuarios PRIMARY KEY(usuario_id)
		);";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


$sql="INSERT INTO usuarios values(null,'ivan', 'rojo', 'Programador', 'ivanrojo07@gmail.com', '".sha1('123456')."', 'administrador', null ),
	(null,'rodolfo', 'rojo', 'Programador', 'ivanrojo07@gmail.com', '".sha1('123456')."', 'administrador', null ),
	(null,'ernesto', 'rojo', 'Programador', 'ivanrojo07@gmail.com', '".sha1('123456')."', 'administrador', null ),

	(null,'fabricio', 'rojo', 'Programador', 'ivanrojo07@gmail.com', '".sha1('123456')."', 'administrador', null );";
mysqli_query($conn, $sql);

mysqli_close($conn);
?>
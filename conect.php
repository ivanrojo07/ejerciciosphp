<?php 
//conexion a la base de datos
// Create connection
$conn = mysqli_connect('localhost', 'root', 'ivanrojo07@', 'cursophp');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
//mysqli_query($conn, "SET NAMES 'utf8'");

 ?>
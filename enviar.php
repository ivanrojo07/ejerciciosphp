<?php
// Create connection
$conn = mysqli_connect('localhost', 'root', 'ivanrojo07@', 'cursophp');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql="INSERT INTO usuarios values();";
//mysqli_query($conn, $sql);

//mysqli_close($conn);
?>
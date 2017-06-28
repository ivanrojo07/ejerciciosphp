
<?php 
include 'conect.php';

if(isset($_POST["submit"])){
	$email = trim($_POST["email"]);
	$password = sha1($_POST["password"]);

	$sql = "SELECT * from usuarios WHERE email ='".$email."' AND password='".$password."';";
	var_dump($sql);
	$login = mysqli_query($conn, $sql);
	var_dump($login);
	if ($login && mysqli_num_rows($login)==1) {
		# code...
		$_SESSION["logged"]=mysqli_fetch_assoc($login);

		header("Location: ejercicio29verusuarios.php");
		
	}else{
		$_SESSION["error_login"]= "Error al iniciar sesión";
		header("Location: login.php");
	}
	var_dump($_SESSION);
} 

?>
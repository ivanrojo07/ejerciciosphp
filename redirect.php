<?php
include "login-user.php";
if (!isset($_SESSION["logged"])) {
	# code...
	header("Location:login.php");
}
 ?>
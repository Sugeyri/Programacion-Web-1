<?php

session_start();

	$id = $_GET['usuario'];
	$mysqli = new mysqli("localhost", "root", "", "didano");		
	$sql = $mysqli->query("delete from usuario where usuario='$id'");	
	echo "<script> window.open('crear-usuario.php','_self')</script>";
	 

?>
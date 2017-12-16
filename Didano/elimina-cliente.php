<?php

session_start();

	$id = $_GET['codigo'];
	$mysqli = new mysqli("localhost", "root", "", "didano");		
	$sql = $mysqli->query("delete from cliente where cogigo='$id'");	
	echo "<script> window.open('agregar-cliente.php','_self')</script>";
	 

?>
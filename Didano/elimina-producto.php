<?php

session_start();

	$id = $_GET['codigo'];
	$mysqli = new mysqli("localhost", "root", "", "didano");		
	$sql = $mysqli->query("delete from producto where codigo='$id'");	
	echo "<script> window.open('agregar-producto.php','_self')</script>";
	 

?>
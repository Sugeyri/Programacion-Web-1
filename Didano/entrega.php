<?php

session_start();

	$id = $_GET['id'];
	$mysqli = new mysqli("localhost", "root", "", "didano");		
	$sql = $mysqli->query("UPDATE pedido SET estado='Entregado' WHERE id='$id'");	
	echo "<script> window.open('pedidos.php','_self')</script>";
    
?>
<?php

session_start();

	$mysqli = new mysqli("localhost", "root", "", "didano");	
	
	$id = $_POST['id'];
	$cod = $_POST['codigo'];
    $nom =  $_POST['nombre'];
    $fam = $_POST['fam'];
	$und = $_POST['und'];
    $precio =  $_POST['precio'];

        $sql = $mysqli->query("UPDATE producto SET codigo='$cod', nombre=$nom, familia='$fam',
        unidad='$und', precio=$precio WHERE id=$id");

    
                print '<script language="JavaScript">'; 
                print 'alert("Registro actualizado!");'; 
                print '</script>'; 
          
	echo "<script> window.open('agregar-producto.php','_self')</script>";
    
	
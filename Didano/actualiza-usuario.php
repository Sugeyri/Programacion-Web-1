<?php

session_start();

	$mysqli = new mysqli("localhost", "root", "", "didano");	
	
	$id = $_GET['id'];
	$user = $_POST['usuario'];
    $tipousuario =  $_POST['tipousuario'];
        $pass = $_POST['clave'];
        $sql = $mysqli->query("update usuario set usuario='$user', tipousuario=$tipousuario, pass='$pass' where id=$id");
        
                print '<script language="JavaScript">'; 
                print 'alert("Registro actualizado!");'; 
                print '</script>'; 
          
	echo "<script> window.open('crear-usuario.php','_self')</script>";
    
	
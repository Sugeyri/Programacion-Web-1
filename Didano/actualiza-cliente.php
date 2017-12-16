<?php

session_start();

	$mysqli = new mysqli("localhost", "root", "", "didano");	
	
    $id = $_POST['id']; 
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $ruta = $_POST['ruta'];
    $responsable = $_POST['responsable'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
        $sql = $mysqli->query("update cliente set codigo='$codigo', nombre=$nombre, ruta='$ruta, 
        'responsable='$responsable', direccion=$direccion, telefono='$telefono' where codigo=$codigo");
        
                print '<script language="JavaScript">'; 
                print 'alert("Registro actualizado!");'; 
                print '</script>'; 
          
	echo "<script> window.open('agregar-cliente.php','_self')</script>";
    
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 
	$mensaje = '
			<h3 align="center">Buenas Noches.</h3><br><br>
			<h3 align="center">Estos son los pedidos que se realizaron hoy.<br>
			Gracias</h3>';

	$para  = 'sugeyrirojas@gmail.com;';
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	
	$tipocorreos=explode('@',$para);
	############
	$para=trim($para);
	$nletra=strlen($para);
	$correo='';
	$n=1;

	for ($x=0; $x < $nletra; $x++){
		if($para[$x]==';'){
			$n++;
			$vcorreo[$n]=$correo;
			$correo='';
		}else{
			$correo=$correo.$para[$x];	
		}
	}
	
	foreach ($vcorreo as $mail) {
		$titulo = "PEDIDOS DE HOY";
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		
		$tipocorreos=explode('@',$mail);
		
		if($tipocorreos['1']=='gmail.com'){
			// Cabeceras adicionales para gmail
			$cabeceras .= "From: Admin" . "\r\n";
		}
		mail($mail, $titulo, $mensaje, $cabeceras);
		echo $mail.', Correo enviado con exito<br>';
	}

?>
</body>
</html>
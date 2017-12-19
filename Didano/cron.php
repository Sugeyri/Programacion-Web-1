<?php
header("Pragma: public");
header("Expires: 0");
$filename= "Pedidos.xls";
header("Content-type: aplication/x-msdownload");
header("Content-Disposition: attachment; filename = $filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <title>Resultados de Pedidos</title>
</head>
<body>
<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "didano";
$tbl_name = "pedido";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
?>

<div class="container">
<h2><center>
<?php

echo "LISTA DE PEDIDOS PENDIENTES A LA FECHA DE " . date("d") . " del " . date("m") . " de " . date("Y");
?>
</center></h2><br><br>
<table class='table'>
<tr>
    <th>Id</th><th>Producto</th><th>Cantidad</th><th>Cliente</th><th>Fecha de Pedido</th><th>Fecha de Entrega</th>
</tr>			
<?php
//cargar tabla

$resultado = $conexion->query("SELECT id, producto, cantidad, cliente, fecha, fechaentrega FROM pedido WHERE estado = 'Pendiente'");
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
    exit;
}else{
while ($fila = $resultado->fetch_row()) 
{					
    echo "<tr>";
    echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td>";	
   
    echo "</tr>";
    
}
$resultado->close();
}		
?>
</table>
</div>
</body>
</html>



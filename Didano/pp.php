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
$resultado = $conexion->query("SELECT id, producto, cantidad, cliente, fecha, fechaentrega FROM pedido WHERE estado = 'Pendiente'");
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
    exit;
}else{

$asignatura=$row;

header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=Informe2.xlsx");
header("Pragma: no-cache");
header("Expires: 0");

echo "
<table border=3 cellpadding=2>
<center> \n";
echo "<th colspan=9> </th>\n";
echo "
<tr>
\n";
echo "<th>Asignatura</th>\n";
echo "<th>pp</th>\n";
echo "<th>j</th>\n";///nombre asignatura
}
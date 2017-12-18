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

$resultado = mysqli_query("SELECT id, producto, cantidad, cliente FROM pedido WHERE estado = 'pendiente'");
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
    exit;
}
$fila = mysqli_fetch_row($resultado);

echo $fila[0]; // 42
echo $fila[1]; // el valor de email
?>
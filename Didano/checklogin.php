
<?php
session_start();
?>

<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "didano";
$tbl_name = "usuario";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['user'];
$password = $_POST['pass'];
 
$sql = "SELECT * FROM $tbl_name WHERE usuario = '$username'";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {     
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if ($password == $row['pass']) { 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    if ($row['tipousuario'] == "Administrador"){
        echo "<script> window.open('menu-principal.php','_self')</script>";
    }
    else if ($row['tipousuario'] == "Empleado"){
        echo "<script> window.open('menu-empleado.php','_self')</script>";
    }

 } else { 
   echo '<script language="javascript">alert("Email o Contraseña estan incorrectos.");</script>'; 
   
   echo "<script> window.open('iniciar-sesion.php','_self')</script>";
   
 }
 mysqli_close($conexion); 
 ?>
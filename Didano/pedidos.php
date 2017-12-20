<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <title>Pedidos</title>
</head>
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
<body>
        <header>
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="buttom" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
                    <span class="sr-only">Desplegar / Ocultar Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a href="menu-principal.php" class="navbar-brand"> Didano</a>
                </div>
                <div class="collapse navbar-collapse" id="navegacion-fm">
                    <ul class="nav navbar-nav">
                        <li><a href="pedidos.php">Ver Pedidos</a></li>
                        <li><a href="crear-usuario.php">Agregar Usuario</a></li>
                        <li><a href="agregar-producto.php">Agregar Producto</a></li>
                        <li><a href="agregar-cliente.php">Agregar Cliente</a></li>
                        <li><a href="logout.php">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Pedidos</h2>

                <div class="tabbable-panel">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active" role="presentation"><a href="#tab-ped-pendientes" aria-controls="tab-ped-pendientes" data-toggle="tab" role="tab">Pendientes </a></li>
                            <li role="presentation"><a href="#tab-ped-realizados" aria-controls="tab-ped-realizados" data-toggle="tab" role="tab">Entregadas </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab-ped-pendientes">
                                <div class="container container-tabla">
                                    <br>                          
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <tr class="info">
                                            <tr>
        <th>Id</th><th>Producto</th><th>Cantidad</th><th>Subtotal</th><th>Cliente</th><th>Total</th><th>Fecha de Pedido</th><th>Fecha Entrega</th><th>Estado</th><th>Entregar</th>
    </tr>			
   <?php
    //cargar tabla
   $consulta= "SELECT * FROM pedido WHERE estado='Pendiente'";
   if ($resultado =  mysqli_query($conexion, $consulta)) 
   {
    while ($fila = $resultado->fetch_row()) 
    {					
        echo "<tr>";
        echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td><td>$fila[8]</td>";	
        echo"<td>";						
        echo "<a class='btn btn-success'href='entrega.php?id=" .$fila[0] ."'><span class='glyphicon glyphicon-check'></span></a>";		
        echo "</td>";
        echo "</tr>";
    }
    $resultado->close();
   }		
   ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <div role="tabpanel" class="tab-pane" id="tab-ped-realizados">
                                <div class="container container-tabla">
                                    
                                    <div class="table-responsive">
                                        <br>
                                    <table class="table table-hover ">
                                    <tr class="info">
                                    <tr>
                                    <th>Id</th><th>Producto</th><th>Cantidad</th><th>Subtotal</th><th>Cliente</th><th>Total</th><th>Fecha de Pedido</th><th>Fecha Entrega</th><th>Estado</th>
</tr>			
<?php
//cargar tabla
$consulta= "SELECT * FROM pedido WHERE estado='Entregado'";
if ($resultado =  mysqli_query($conexion, $consulta)) 
{
while ($fila = $resultado->fetch_row()) 
{					
echo "<tr>";
echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td><td>$fila[8]</td>";	
echo"<td>";						
echo "</td>";
echo "</tr>";
}
$resultado->close();
}		
?>
                                </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <title>Realizar Pedido</title>
</head>
    <?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "didano";
$tbl_name = "producto";

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
                                        <li><a href="pedido.php">Realizar Pedido</a></li>
                                        <li><a href="Inicio.php">Iniciar Sesion</a></li>
                                    </ul>
                                </div>
            </div>
        </nav>
    </header>
<br>
    <div class="container container-ph">
        <div class="page-header">
            <h2>Realizar Pedido</h2>
        </div>
    </div>
    <div class="container container-ped-1">
        <form action="" method="POST" class="">
            <div class="form-group">
                <label for="codigo">Código:</label>
                
                <a data-toggle='modal' data-target='#buscar'  class='btn btn-xs'href='#"'><span class='glyphicon glyphicon-search'></span></a>
                <input class="form-control" name="codigo" type="text" placeholder="Código de producto">
            </div>  
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input class="form-control" name="cantidad" type="text" placeholder="Cantidad"  onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha Entrega:</label>
                <input class="form-control" name="fecha" type="date" placeholder="dd/mm/aaaa">
            </div>
            <div class="form-group">
                <label for="cod-cliente">Código Cliente:</label>
                <input class="form-control" name="cod-cliente" type="text" placeholder="Código Cliente">
            </div>
            
            <div class="form-group">
            <input type="submit" name="guardar" value="Enviar" class="btn btn-lg btn-primary"></input>
        </div>
        </form>
    </div>
    <br>

    <div class="modal" id="buscar" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Buscador de Productos</h4>
                    </div>
                    <div class="modal-body">                      
                                   <table class='table'>
                                        <tr>
                                            <th>Código</th><th>Nombre</th>
                                        </tr> 
                                        <?php
                                            $sql = "SELECT * FROM producto ";
                                            
                                            if ($resultado = $conexion->query($sql)) 
                                            {
                                                while ($fila = $resultado->fetch_row()) 
                                                {					
                                                    echo "<tr>";
                                                    echo "<td>$fila[1]</td><td>$fila[2]</td>";	
                                                    echo "</tr>";
                                                }
                                                $resultado->close();
                                            }else{
                                                print '<script language="JavaScript">'; 
                                                print 'alert("No hay resultados de la busqueda!");'; 
                                                print '</script>'; 
                                            }
                                            mysqli_close($conexion);
                                        ?>
                                        </table>

                                    </div>							
                       </form>
                    </div>
                </div>
            </div>
        </div> 

            
<?php
if(isset($_POST['guardar'])){
    $cod = $_POST['codigo'];
    $cant = $_POST['cantidad'];
    $sql = "SELECT precio FROM producto WHERE codigo= $cod ";
    
    $consulta = mysqli_query($conexion, $sql);
        while ($fila = $consulta->fetch_row()) 
        {	
            $precio = $fila[0];
            $subtotal = $cant * $precio;
        }   
    
    $subt = $subtotal;
    $cliente = $_POST['cod-cliente'];
    $total += $subtotal;
    $fecha = localtime();
    $fechaentrega = $_POST['fecha'];
    $estado= 'Pendiente';


        $insert = "INSERT INTO pedido (producto, cantidad, subtotal, cliente, total, fecha, fechaentrega, estado)
         VALUES  ('$pro','$can','$subt', '$cliente','$total','$fecha','$fechaentrega','$estado')";
        echo $insert;
        $ejecutar = mysqli_query($conexion, $insert);

             if($ejecutar){print '<script language="JavaScript">'; 
                print 'alert("Pedido Realizado");'; 
                print '</script>'; 
            }    
        }
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
<br><br>

</html>
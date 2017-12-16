<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.ico">
    <link rel="stylesheet" href="css/style-b.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <title>Agregar Cliente</title>
</head>
<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "didano";
$tbl_name = "cliente";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

if(isset($_POST['agregar'])){
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $ruta = $_POST['ruta'];
    $responsable = $_POST['responsable'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

        $insert = "INSERT INTO cliente(codigo, nombre, ruta, responsable, direccion, telefono) VALUES  ('$codigo','$nombre','$ruta','$responsable','$direccion','$telefono')";
        
        $ejecutar = mysqli_query($conexion, $insert);

             if($ejecutar){print '<script language="JavaScript">'; 
                print 'alert("Registrado con éxito");'; 
                print '</script>'; 
            }       
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
                    <a href="#" class="navbar-brand"> Didano</a>
                </div>
                <!--inicia menu-->
                <div class="collapse navbar-collapse" id="navegacion-fm">
                <ul class="nav navbar-nav">
                <li><a href="menu-principal.php">Inicio</a></li>
                <li><a href="pedidos.php">Pedidos</a></li>
                <li><a href="crear-usuario.php">Agregar Usuario</a></li>
                <li><a href="agregar-producto.php">Agregar Producto</a></li>
                <li><a href="agregar-cliente.php">Agregar Cliente</a></li>
                <li><a href="agregar-empleado.php">Agregar Empleado</a></li>
                <li><a href="logout.php">Cerrar Sesion</a></li>
            </ul>
                </div>
            </div>
        </nav>
    </header>
<br><br>
    <div class="container container-ph">
        <div class="page-header">
            <h2>Agregar Cliente</h2>
        </div>
    </div>
    <div class="container container-cl">
        <form action="" method="POST" id="nuevo-cliente">
            <div class="form-group">
                <label for="codigo">Código: <p>*</p></label>
                <input class="form-control" name="codigo" type="text" placeholder="Código Cliente" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre: <p>*</p></label>
                <input class="form-control" name="nombre" type="text" placeholder="Nombre" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <label for="Ruta">Ruta: <p>*</p></label><br>
                <div id="Ruta">
                    <input type="radio" name="ruta" id="Ciudad Quesada" value="Ciudad Quesada" required>Ciudad Quesada<br>
                    <input type="radio" name="ruta" id="Pital" value="Pital" required>Pital<br>
                    <input type="radio" name="ruta" id="Fortuna" value="Fortuna" required>Fortuna<br>
                    <input type="radio" name="ruta" id="Cen Cinai" value="Cen Cinai" required>Cen Cinai<br>
                </div>
            </div>
            <div class="form-group">
                <label for="responsable">Responsable: <p>*</p></label>
                <input class="form-control" name="responsable" type="text" placeholder="Responsable" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input class="form-control" name="direccion" type="text" placeholder="Dirección">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono: <p>*</p></label>
                <input class="form-control" name="telefono" type="text" placeholder="Teléfono" title="Favor rellenar este campo!" required>
            </div>
            <div class="container container-v1">
                <input type="submit" name="agregar" value="Agregar" class="btn btn-lg btn-success"></input>
            </div>
        </form>

        <div class="modal" id="editCli" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Cliente</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualiza-cliente.php" method="POST">                       		
                       		        
                       		        <input  id="id" name="id" type="hidden" ></input>   		
                                       <div class="form-group">
                                       <label for="codigo">Código: <p>*</p></label>
                                       <input class="form-control" id="codigo" name="codigo" type="text" placeholder="Código Cliente" title="Favor rellenar este campo!" required>
                                   </div>
                                   <div class="form-group">
                                       <label for="nombre">Nombre: <p>*</p></label>
                                       <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" title="Favor rellenar este campo!" required>
                                   </div>
                                   <div class="form-group">
                                       <label for="Ruta">Ruta: <p>*</p></label><br>
                                       <div id="Ruta">
                                           <input type="radio" name="ruta" id="ruta" value="Ciudad Quesada" required>Ciudad Quesada<br>
                                           <input type="radio" name="ruta" id="ruta" value="Pital" required>Pital<br>
                                           <input type="radio" name="ruta" id="ruta" value="Fortuna" required>Fortuna<br>
                                           <input type="radio" name="ruta" id="ruta" value="Cen Cinai" required>Cen Cinai<br>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label for="responsable">Responsable: <p>*</p></label>
                                       <input class="form-control" name="responsable" id="responsable" type="text" placeholder="Responsable" title="Favor rellenar este campo!" required>
                                   </div>
                                   <div class="form-group">
                                       <label for="direccion">Dirección:</label>
                                       <input class="form-control" name="direccion" id="direccion" type="text" placeholder="Dirección">
                                   </div>
                                   <div class="form-group">
                                       <label for="telefono">Teléfono: <p>*</p></label>
                                       <input class="form-control" id="telefono" name="telefono" type="text" placeholder="Teléfono" title="Favor rellenar este campo!" required>
                                   </div>

									<input type="submit" value="Editar" class="btn btn-success">							
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 
    <br>
    <table class='table'>
    <tr>
        <th>Código</th><th>Nombre</th><th>Ruta</th><th>Responsable</th><th>Dirección</th><th>Teléfono</th><th><span class="glyphicon glyphicon-wrench"></span></th>
    </tr>			
   <?php
    //cargar tabla
   $consulta= "SELECT * FROM cliente";
   if ($resultado =  mysqli_query($conexion, $consulta)) 
   {
    while ($fila = $resultado->fetch_row()) 
    {					
        echo "<tr>";
        echo "<td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td>";	
        echo"<td>";						
        echo "<a data-toggle='modal' data-target='#editCli' data-id='" .$fila[0] ."' data-codigo='" .$fila[1] ."' data-nombre='" .$fila[2] ."' data-ruta='" .$fila[3] ."' data-responsable='" .$fila[4] ."' data-direccion='" .$fila[5] ."' data-telefono='" .$fila[6] ."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span></a> ";			
        echo "<a class='btn btn-danger'href='elimina-cliente.php?codigo=" .$fila[1] ."'><span class='glyphicon glyphicon-remove'></span></a>";		
        echo "</td>";
        echo "</tr>";
    }
    $resultado->close();
   }		
   ?>
   </table>
   
   <?php
   
    mysqli_close($conexion); 
   ?>
   
   </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/agregar-cliente.js"></script>
    <script>			 
		  $('#editCli').on('show.bs.modal', function (event) {
		  var recipient0 = button.data('id')
		  var recipient1 = button.data('codigo')
		  var recipient2 = button.data('nombre')
		  var recipient3 = button.data('ruta')
          var recipient4 = button.data('responsable')
		  var recipient5 = button.data('direccion')
		  var recipient6 = button.data('telefono')
		  
		  var modal = $(this)		 
		  modal.find('.modal-body #id').val(recipient0)
		  modal.find('.modal-body #codigo').val(recipient1)
		  modal.find('.modal-body #nombre').val(recipient2)
		  modal.find('.modal-body #ruta').val(recipient3)
          modal.find('.modal-body #responsable').val(recipient4)
		  modal.find('.modal-body #direccion').val(recipient5)
		  modal.find('.modal-body #telefono').val(recipient6)		 
		});
		
	</script>
</body>
<br><br>

</html>
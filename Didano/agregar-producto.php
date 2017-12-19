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
    <title>Agregar Producto</title>
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

if(isset($_POST['agregar'])){
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $fam = $_POST['fam'];
    $unidad = $_POST['und'];
    $precio = $_POST['precio'];

        $insert = "INSERT INTO producto(codigo, nombre, familia, unidad, precio) 
        VALUES  ('$codigo','$nombre','$fam','$unidad','$precio')";
        
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
                            <a href="menu-principal.php" class="navbar-brand"> Didano</a>
                        </div>
                        <!--inicia menu-->
                        <div class="collapse navbar-collapse" id="navegacion-fm">
                        <ul class="nav navbar-nav">
                        <li><a href="pedidos.php">Pedidos</a>
                            <li><a href="crear-usuario.php">Agregar Usuario</a></li></li>
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
    <div class="container container-ph">
        <div class="page-header">
            <h2>Agregar Producto</h2>
        </div>
    </div>
    <div class="container container-prod">
        <form method="POST" class="">
            <div class="form-group">
                <label for="codigo">Código:<p>*</p></label>
                <input class="form-control" name="codigo" type="text" placeholder="Código de producto" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre: <p>*</p></label>
                <input class="form-control" name="nombre" type="text" placeholder="Nombre" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <label for="familia">Familia: <p>*</p></label><br>
				<div name="familia">
                    <input type="radio" name="fam" id="Frutas" value="Frutas" required>Frutas
                    <br>
                    <input type="radio" name="fam" id="Hortalizas" value="Hortalizas" required>Hortalizas
				</div>
			</div>
            <div class="form-group">
                <label for="unidad">Unidad: <p>*</p></label><br>
				<div name="Unidad">
                    <input type="radio" name="und" id="unidad" value="Unidad" required>Unidad
                    <br>
                    <input type="radio" name="und" id="kilo" value="Kilogramos" required>Kilogramos
				</div>
			</div>
            <div class="form-group">
                <label for="precio">Precio: <p>*</p></label>
                <input class="form-control" name="precio" type="text" placeholder="Precio" title="Favor rellenar este campo!" required>
            </div>
            <div class="container container-v1">
                <input type="submit" name="agregar" value="Agregar" class="btn btn-lg btn-success"></input>
            </div>
        </form>
        <br>

    <div class="modal" id="editProducto" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Producto</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualiza-producto.php" method="POST">                       		
                       		        
                       		        <input  id="id" name="id" type="hidden" ></input>   		
                                       <div class="form-group">
                                       <label for="codigo">Código:<p>*</p></label>
                                       <input class="form-control" name="codigo" id="codigo" type="text" placeholder="Código de producto" title="Favor rellenar este campo!" required>
                                   </div>
                                   <div class="form-group">
                                       <label for="nombre">Nombre: <p>*</p></label>
                                       <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Nombre" title="Favor rellenar este campo!" required>
                                   </div>
                                   <div class="form-group">
                                       <label for="familia">Familia: <p>*</p></label><br>
                                       <div name="familia">
                                           <input type="radio" name="fam" id="familia" value="Frutas" required>Frutas
                                           <br>
                                           <input type="radio" name="fam" id="familia" value="Hortalizas" required>Hortalizas
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label for="unidad">Unidad: <p>*</p></label><br>
                                       <div name="Unidad">
                                           <input type="radio" name="und" id="unidad" value="Unidad" required>Unidad
                                           <br>
                                           <input type="radio" name="und" id="unidad" value="Kilogramos" required>Kilogramos
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label for="precio">Precio: <p>*</p></label>
                                       <input class="form-control" name="precio" id="precio" type="text" placeholder="Precio" title="Favor rellenar este campo!" required>
                                   </div>
									<input type="submit" value="Editar" name="editar" class="btn btn-success">							
                       </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div> 
    <div class="container container-tabla">
        <div class="table-responsive">
         
 <table class='table'>
 <tr>
     <th>Id</th><th>Código</th><th>Nombre</th><th>Familia</th><th>Unidad</th><th>Precio</th><th><span class="glyphicon glyphicon-wrench"></span></th>
 </tr>			
<?php
 //cargar tabla
$consulta= "SELECT * FROM producto";
if ($resultado =  mysqli_query($conexion, $consulta)) 
{
 while ($fila = $resultado->fetch_row()) 
 {					
     echo "<tr>";
     echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td>";	
     echo"<td>";						
     echo "<a data-toggle='modal' data-target='#editProducto' data-id='" .$fila[0]."' data-codigo='" .$fila[1] .
     "' data-nombre='" .$fila[2] ."' data-familia='" .$fila[3] ."' data-unidad='" .$fila[4] .
     "' data-precio='" .$fila[5] ."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span></a> ";			
     echo "<a class='btn btn-danger'href='elimina-producto.php?codigo=" .$fila[1] ."'><span class='glyphicon glyphicon-remove'></span></a>";		
     echo "</td>";
     echo "</tr>";
 }
 $resultado->close();
}		
?>
</table>
        </div>
    </div>




    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>			 
		  $('#editProducto').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		  var recipient0 = button.data('id')
		  var recipient1 = button.data('codigo')
		  var recipient2 = button.data('nombre')
          var recipient3 = button.data('familia')
          var recipient4 = button.data('unidad')
          var recipient5 = button.data('precio')
          

		  var modal = $(this)		 
		  modal.find('.modal-body #id').val(recipient0)
		  modal.find('.modal-body #codigo').val(recipient1)
		  modal.find('.modal-body #nombre').val(recipient2)
          modal.find('.modal-body #familia').val(recipient3)
          modal.find('.modal-body #unidad').val(recipient4)
		  modal.find('.modal-body #precio').val(recipient5)			 
		});
		
	</script>
</body>
<br><br>

</html>
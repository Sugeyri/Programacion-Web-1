<!DOCTYPE html>
<html lang="es">
<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.ico">
    <link rel="stylesheet" href="css/style-b.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <title>Agregar Usuario</title>
</head>

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

if(isset($_POST['guardar'])){
    $username = $_POST['usuario'];
    $tipousuario = $_POST['tipousuario'];

    if ($_POST['clave'] == $_POST['nclave']){
        $pass = $_POST['clave'];

        $insert = "INSERT INTO usuario(usuario, tipousuario, pass) VALUES  ('$username','$tipousuario','$pass')";
        
        $ejecutar = mysqli_query($conexion, $insert);

             if($ejecutar){print '<script language="JavaScript">'; 
                print 'alert("Registrado con éxito");'; 
                print '</script>'; 
            }       
    }
    else{
        echo '<script language="javascript">alert("Contraseñas no coinciden.");</script>';
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
        <div class="collapse navbar-collapse" id="navegacion-fm">
            <ul class="nav navbar-nav">
                <li><a href="pedidos.php">Pedidos</a></li>
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
            <h2>Agregar Usuario</h2>
        </div>
    </div>
    <div class="container container-cl">
        <form method="post" class="" id="nuevo-usuario">

            <div class="form-group">
                <label for="usuario">Usuario: <p>*</p></label>
                <input class="form-control" name="usuario" type="text" placeholder="Usuario" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
            <label for="tipousuario">Tipo de Usuario</label>
            <select class="form-control" name="tipousuario" id="tipousuario">
            <option value="" selected disabled>Seleccione una opcion</option>
              <option value="Administador">Administrador</option>
              <option value="Empleado">Empleado</option>
            </select>
          </div>
            <div class="form-group">
                <label for="clave">Contraseña: <p>*</p></label>
                <input class="form-control" name="clave" type="password" placeholder="Clave" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <label for="nclave">Confirmar contraseña: <p>*</p></label>
                <input class="form-control" name="nclave" type="password" placeholder="Confirmar clave" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <input type="submit" name="guardar" value="Agregar" class="btn btn-lg btn-success"></input>
                

            </div>
            </form>


            <div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Usuario</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="actualiza-usuario.php" method="POST">                       		
                       		        
                       		        <input  id="id" name="id" type="hidden" ></input>   		
                                       <div class="form-group">
                                       <label for="usuario">Usuario: <p>*</p></label>
                                       <input class="form-control" name="usuario" id="usuario" type="text" placeholder="Usuario" title="Favor rellenar este campo!" required>
                                   </div>
                                   <div class="form-group">
                                   <label for="tipousuario">Tipo de Usuario</label>
                                   <select class="form-control" name="tipousuario" id="tipousuario">
                                   <option value="" selected disabled>Seleccione una opcion</option>
                                     <option value="admin">Administrador</option>
                                     <option value="empleado">Empleado</option>
                                   </select>
                                 </div>
                                   <div class="form-group">
                                       <label for="clave">Contraseña: <p>*</p></label>
                                       <input class="form-control" name="clave" id="clave" type="password" placeholder="Clave" title="Favor rellenar este campo!" required>
                                   </div>
                                   <div class="form-group">
                                       <label for="nclave">Confirmar contraseña: <p>*</p></label>
                                       <input class="form-control" name="nclave" id="nclave" type="password" placeholder="Confirmar clave" title="Favor rellenar este campo!" required>
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
      
 <table class='table'>
 <tr>
     <th>Usuario</th><th>Tipo Usuario</th><th><span class="glyphicon glyphicon-wrench"></span></th>
 </tr>			
<?php
 //cargar tabla
$consulta= "SELECT * FROM usuario";
if ($resultado =  mysqli_query($conexion, $consulta)) 
{
 while ($fila = $resultado->fetch_row()) 
 {					
     echo "<tr>";
     echo "<td>$fila[1]</td><td>$fila[2]</td>";	
     echo"<td>";						
     echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-user='" .$fila[1] ."' data-tipo='" .$fila[2] ."' data-pass='" .$fila[3] ."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span></a> ";			
     echo "<a class='btn btn-danger'href='elimina-usuario.php?usuario=" .$fila[1] ."'><span class='glyphicon glyphicon-remove'></span></a>";		
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
    <br>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>			 
		  $('#editUsu').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient0 = button.data('id')
		  var recipient1 = button.data('user')
		  var recipient2 = button.data('tipo')
		  var recipient3 = button.data('pass')
		   // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		 
		  var modal = $(this)		 
		  modal.find('.modal-body #id').val(recipient0)
		  modal.find('.modal-body #usuario').val(recipient1)
		  modal.find('.modal-body #tipousuario').val(recipient2)
		  modal.find('.modal-body #clave').val(recipient3)		 
		});
		
	</script>
</body>
<br><br>

</html>
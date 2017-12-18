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


$carrito = $_SESSION['agregar'];

if(isset($_POST['agregar'])){
    
$lista[]=array(
    $codigo = $_POST['codigo'],
    $nombre = $_POST['nombre'],
    $cantidad = $_POST['cantidad'],
);  
    print_r($lista);

       
/* acá se harian las operaciones de agregar/quitar del carrito */
/* se guardan las modificaciones en la variable de sesión */
$_SESSION['carrito'] = $carrito;

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
                                        <li><a href="iniciar-sesion.php">Iniciar Sesion</a></li>
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
                <label for="nombre">Nombre:</label>
                <input class="form-control" name="nombre" type="text" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input class="form-control" name="cantidad" type="text" placeholder="Cantidad">
            </div>
            <input type="submit" name="agregar" value="Agregar" class="btn btn-xs btn-success"></input>
            <input type="submit" id="eliminar" value="Quitar" class="btn btn-xs btn-danger"></input>
        </form>
    </div>
    <br>
    <div class="container container-tabla">
        <div class="table-responsive">
            <table class="table text-center ">
                <thead>
                    <th class="text-center">Código</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Cantidad</th>
                </thead>
                <tbody id="pedido-tabla">
                <tr>
  <?php foreach($carrito as $codigo )
  {
 ?>
    <tr>
    <td><?php print $id; ?></td>
    <td><?php print $cantidad; ?></td>
    </tr>
  <?php } ?>
</tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container container-ped-2">
        <br>
        <form action="" class="">
            <div class="form-group">
                <label for="fecha">Fecha Entrega:</label>
                <input class="form-control" id="fecha" type="text" placeholder="dd/mm/aaaa">
            </div>
            <div class="form-group">
                <label for="cod-cliente">Código Cliente:</label>
                <input class="form-control" id="cod-cliente" type="text" placeholder="Código Cliente">
            </div>
            <div class="form-group">
                <label for="responsable">Responsable:</label>
                <input class="form-control" id="responsable" type="text" placeholder="Responsable">
            </div>
            <div class="form-group">
                <label for="total">Total:</label>
                <input class="form-control" id="total" type="text" placeholder="Total">
            </div>
            <div class="form-group">
                <label for="notas">Notas:</label>
                <input class="form-control" id="notas" type="text" placeholder="Escriba sus notas">
            </div>

            <div class="container container-v1">
                <a href="#ventana2" id="enviar" class="btn btn-lg btn-primary" data-toggle="modal">Enviar</a>

                <div class="modal fade" id="ventana2">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">¿Desea enviar el pedido?</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
<br><br>

</html>
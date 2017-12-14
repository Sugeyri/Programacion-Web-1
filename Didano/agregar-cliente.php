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
                        <li><a href="pedidos.html">Pedidos</a></li>
                        <li><a href="agregar-producto.php">Agregar Producto</a></li>
                        <li><a href="agregar-cliente.php">Agregar Cliente</a></li>
                        <li><a href="agregar-empleado.php">Agregar Empleado</a></li>

                        <li><a href="Inicio.php">Cerrar Sesion</a></li>
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
        <form action="" class="" id="nuevo-cliente">
            <div class="form-group">
                <label for="codigo">Código: <p>*</p></label>
                <input class="form-control" id="codigo" type="text" placeholder="Código Cliente" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre: <p>*</p></label>
                <input class="form-control" id="nombre" type="text" placeholder="Nombre" title="Favor rellenar este campo!" required>
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
                <input class="form-control" id="responsable" type="text" placeholder="Responsable" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input class="form-control" id="direccion" type="text" placeholder="Dirección">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono: <p>*</p></label>
                <input class="form-control" id="telefono" type="text" placeholder="Teléfono" title="Favor rellenar este campo!" required>
            </div>
            <div class="container container-v1">
                <input type="submit" id="agregar" value="Agregar" class="btn btn-lg btn-success"></input>
                <input type="button" id="editar" value="Editar" class="btn btn-lg btn-default"></input>
                <input type="submit" id="eliminar" value="Eliminar" class="btn btn-lg btn-danger"></input>
            </div>
        </form>

    </div>
    <br>
    <div class="container container-tabla">
        <div class="table-responsive">
            <table class="table text-center ">
                <thead>
                    <th class="text-center">Código</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Ruta</th>
                    <th class="text-center">Dirección</th>
                    <th class="text-center">Teléfono</th>
                    <th class="text-center">Responsable</th>
                </thead>
                <tbody id="clientes-tabla">

                </tbody>
            </table>
        </div>
    </div>
    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/agregar-cliente.js"></script>
</body>
<br><br>

</html>
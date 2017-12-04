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
    <title>Agregar Empleado</title>
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
                                <li><a href="agregar-producto.html">Agregar Producto</a></li>
                                <li><a href="agregar-cliente.html">Agregar Cliente</a></li>
                                <li><a href="agregar-empleado.html">Agregar Empleado</a></li>
        
                                <li><a href="Inicio.html">Cerrar Sesion</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        <br><br>
    <div class="container container-ph">
        <div class="page-header">
            <h2>Agregar Empleado</h2>
        </div>
    </div>
    <div class="container container-prod">
        <form action="" class="">
            <div class="form-group">
                <label for="codigo">Código: <p>*</p></label>
                <input class="form-control" id="codigo" type="text" placeholder="Código de empleado" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre: <p>*</p></label>
                <input class="form-control" id="nombre" type="text" placeholder="Nombre" title="Favor rellenar este campo!" required>
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
                     <th class="text-center">Teléfono</th>
                 </thead>
                <tbody id="empleado-tabla">

                </tbody>
            </table>
        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/agregar-empleado.js"></script>
</body>
<br><br>

</html>
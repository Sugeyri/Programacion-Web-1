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
    <title>Agregar Usuario</title>
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
                        <li><a href="pedidos.php">Pedidos</a></li>
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
            <h2>Agregar Usuario</h2>
        </div>
    </div>
    <div class="container container-cl">
        <form action="" class="" id="nuevo-usuario">

            <div class="form-group">
                <label for="nombre">Nombre: <p>*</p></label>
                <input class="form-control" id="nombre" type="text" placeholder="Nombre" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido: <p>*</p></label>
                <input class="form-control" id="apellido" type="text" placeholder="Apellido" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <label for="usuario">Usuario: <p>*</p></label>
                <input class="form-control" id="usuario" type="text" placeholder="Usuario" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <label for="correo">Email:</label>
                <input class="form-control" id="correo" type="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="clave">Clave: <p>*</p></label>
                <input class="form-control" id="clave" type="password" placeholder="Clave" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <label for="nclave">Confirmar clave: <p>*</p></label>
                <input class="form-control" id="nclave" type="password" placeholder="Confirmar clave" title="Favor rellenar este campo!" required>
            </div>
            <div class="form-group">
                <input type="submit" id="guardar" value="Agregar" class="btn btn-lg btn-success"></input>
                <input type="button" id="editar" value="Editar" class="btn btn-lg btn-default"></input>
                <input type="button" id="eliminar" value="Eliminar" class="btn btn-lg btn-danger"></input>

            </div>
        </form>


    </div>
    <br>
    <div class="container container-tabla">
        <div class="table-responsive">
            <table class="table text-center ">
                <thead>
                     <th class="text-center">Nombre</th>
                     <th class="text-center">Apellido</th>
                     <th class="text-center">Usuario</th>
                     <th class="text-center">Email</th>
                     <th class="text-center" id="c">Contraseña</th>
                     <th class="text-center" id="nc">Nueva Contraseña</th>
                 </thead>
                <tbody id="usuarios-tabla">

                </tbody>
            </table>
        </div>
    </div>




    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/crear-usuario.js"></script>
</body>
<br><br>

</html>
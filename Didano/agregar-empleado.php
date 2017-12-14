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
<?php
$con = mysqli_connect("127.0.0.1","root","","didano") or die ("Error de conexion");
$consulta = "SELECT * FROM `empleado`";
$ejecutar = mysqli_query($con,$consulta);
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
            <h2>Agregar Empleado</h2>
        </div>
    </div>
    <div class="container container-prod">
        <form method = "POST" action = "">
            <div class="form-group">
                <label for="codigo">Código: <p>*</p></label>
                <input class="form-control" name="codigo" type="text" placeholder="Código de empleado" title="Favor rellenar este campo!" >
            </div>
            <div class="form-group">
                <label for="nombre">Nombre: <p>*</p></label>
                <input class="form-control" name="nombre" type="text" placeholder="Nombre" title="Favor rellenar este campo!" >
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono: <p>*</p></label>
                <input class="form-control" name="telefono" type="text" placeholder="Teléfono" title="Favor rellenar este campo!" >
            </div>
            <div class="container container-v1">
                <input type="submit" id="agregar" name="insert" value="Agregar" class="btn btn-lg btn-success"></input>
                <input type="button" id="editar" value="Editar" class="btn btn-lg btn-default"></input>
               

                <?php
                    if(isset($_POST['insert'])){
                        $codigo = $_POST['codigo'];
                        $nombre = $_POST['nombre'];
                        $telefono = $_POST['telefono'];
                    $insert = "INSERT INTO empleado(codigo, nombre,telefono) VALUES ('$codigo','$nombre','$telefono')";
                    $ejecutar = mysqli_query($con, $insert);
                         if($ejecutar){print '<script language="JavaScript">'; 
                            print 'alert("Registrado con éxito");'; 
                            print '</script>'; 
                        }
                     }


                    $query= "SELECT * FROM `empleado`";
                    $result = mysqli_query($con,$consulta);

                    if ($row = mysqli_fetch_array($result)){ 
                    echo "  <br><br><br> <div class='table-responsive'>
                    <table class='table text-center '>
                        <thead>
                             <th class='text-center'>Código</th>
                             <th class='text-center'>Nombre</th>
                             <th class='text-center'>Teléfono</th>
                         </thead>"; 
                    do { 
                        echo "<tr><td>".$row["codigo"]."</td><td>".$row["nombre"]."</td><td>".$row["telefono"]."</td>
                        <td><form method='post' action=''> \n 
                        <input type='submit' name='eliminar' value='X' class='btn btn-l btn-danger'></input>
                        </form></td></tr> \n"; 

                        
                       if(isset($_POST['eliminar'])){
                           
                        $id = $_GET[$row["codigo"]];
                            echo $id;
                            
                            }

                    } while ($row = mysqli_fetch_array($result)); 
                    echo "</table> \n"; 
                    } else { 
                    echo "¡ No se ha encontrado ningún registro !"; 
                    } 
                ?>
            </div>
        </form>
    </div>
  
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/agregar-empleado.js"></script>
</body>
<br><br>

</html>
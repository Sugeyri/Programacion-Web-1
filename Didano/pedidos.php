<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.ico">
    <link rel="stylesheet" href="css/estilos-menu.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Pedidos</title>
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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Pedidos</h2>

                <div class="tabbable-panel">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active" role="presentation"><a href="#tab-ped-pendientes" aria-controls="tab-ped-pendientes" data-toggle="tab" role="tab">Pendientes </a></li>
                            <li role="presentation"><a href="#tab-ped-proceso" aria-controls="tab-ped-proceso" data-toggle="tab" role="tab">En Proceso </a></li>
                            <li role="presentation"><a href="#tab-ped-realizados" aria-controls="tab-ped-realizados" data-toggle="tab" role="tab">Realizados </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab-ped-pendientes">
                                <div class="container container-tabla">
                                    <br><br>
                                    <label for="datetimepicker1">Seleccione el rango de fechas que desea buscar: </label>
                                    <br>
                                    <div class="row">

                                        <div class='col-sm-2'>
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' class="form-control" placeholder="04/06/2017" />
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-sm-2'>
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker2'>
                                                    <input type='text' class="form-control" placeholder="10/06/2017" />
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <tr class="info">
                                                <th>Número</th>
                                                <th>OEM</th>
                                                <th>Ruta</th>
                                                <th>Responsable</th>
                                                <th>Institución</th>
                                                <th>Detalle</th>
                                                <th>Total</th>
                                                <th></th>

                                            </tr>
                                            <tr>
                                                <td>0001</td>
                                                <td>1123</td>
                                                <td>Ciudad Quesada</td>
                                                <td><input class="form-control" id="responsable" type="text" placeholder="Responsable"></td>
                                                <td>Escuela Cedral</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td>20895</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0002</td>
                                                <td>86460</td>
                                                <td>Fortuna</td>
                                                <td><input class="form-control" id="responsable" type="text" placeholder="Responsable"></td>
                                                <td>CTP Fortuna</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td>112300</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0003</td>
                                                <td>876544</td>
                                                <td>Fortuna</td>
                                                <td><input class="form-control" id="responsable" type="text" placeholder="Responsable"></td>
                                                <td>Escuela Republica de Italia</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td>10870</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0004</td>
                                                <td>9085</td>
                                                <td>Ciudad Quesada</td>
                                                <td><input class="form-control" id="responsable" type="text" placeholder="Responsable"></td>
                                                <td>Escuela Porvenir</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td>7090</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0005</td>
                                                <td>56886</td>
                                                <td>Cen Cinai</td>
                                                <td><input class="form-control" id="responsable" type="text" placeholder="Responsable"></td>
                                                <td>Cen Cinai San Martin</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td>30080</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0006</td>
                                                <td>76707</td>
                                                <td>Pital</td>
                                                <td><input class="form-control" id="responsable" type="text" placeholder="Responsable"></td>
                                                <td>CTP Pital</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td>90750</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0007</td>
                                                <td>87657</td>
                                                <td>Pital</td>
                                                <td><input class="form-control" id="responsable" type="text" placeholder="Responsable"></td>
                                                <td>Liceo La Palmera</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td>15400</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0008</td>
                                                <td>765376</td>
                                                <td>Fortuna</td>
                                                <td><input class="form-control" id="responsable" type="text" placeholder="Responsable"></td>
                                                <td>Escuela Chachagua</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td>4060</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0009</td>
                                                <td>7687</td>
                                                <td>Pital</td>
                                                <td><input class="form-control" id="responsable" type="text" placeholder="Responsable"></td>
                                                <td>Escula Gonzalo Monge</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td>39500</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                            </tr>
                                        </table>
                                        <br><br><br>
                                        <a href="totales.php" class="btn btn-md btn-info" data-toggle="modal" target="blank">Totales a Entregar</a>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-ped-proceso">
                                <div class="container container-tabla">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <tr class="info">
                                                <th>Número</th>
                                                <th>OEM</th>
                                                <th>Ruta</th>
                                                <th>Institución</th>
                                                <th>Detalle</th>
                                                <th>Notas</th>
                                                <th>Total</th>
                                                <th>Estado</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td>0001</td>
                                                <td>45687</td>
                                                <td>Ciudad Quesada</td>
                                                <td>Escuela Sucre</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td><input type="text" placeholder="Notas"></td>
                                                <td>60970</td>
                                                <td>PENDIENTE</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                                <td><a href="#" class="btn btn-xs btn-default" data-toggle="modal">Entregar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0002</td>
                                                <td>86460</td>
                                                <td>Fortuna</td>
                                                <td>CTP Fortuna</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td><input type="text" placeholder="Notas"></td>
                                                <td>112300</td>
                                                <td>PENDIENTE</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                                <td><a href="#" class="btn btn-xs btn-default" data-toggle="modal">Entregar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0003</td>
                                                <td>876544</td>
                                                <td>Fortuna</td>
                                                <td>Escuela Republica de Italia</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td><input type="text" placeholder="Notas"></td>
                                                <td>10870</td>
                                                <td>PENDIENTE</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                                <td><a href="#" class="btn btn-xs btn-default" data-toggle="modal">Entregar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0004</td>
                                                <td>9085</td>
                                                <td>Ciudad Quesada</td>
                                                <td>Escuela Porvenir</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td><input type="text" placeholder="Notas"></td>
                                                <td>7090</td>
                                                <td>PENDIENTE</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                                <td><a href="#" class="btn btn-xs btn-default" data-toggle="modal">Entregar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0005</td>
                                                <td>56886</td>
                                                <td>Cen Cinai</td>
                                                <td>Cen Cinai San Martin</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td><input type="text" placeholder="Notas"></td>
                                                <td>30080</td>
                                                <td>PENDIENTE</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                                <td><a href="#" class="btn btn-xs btn-default" data-toggle="modal">Entregar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0006</td>
                                                <td>76707</td>
                                                <td>Pital</td>
                                                <td>CTP Pital</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td><input type="text" placeholder="Notas"></td>
                                                <td>90750</td>
                                                <td>PENDIENTE</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                                <td><a href="#" class="btn btn-xs btn-default" data-toggle="modal">Entregar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0007</td>
                                                <td>87657</td>
                                                <td>Pital</td>
                                                <td>Liceo La Palmera</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td><input type="text" placeholder="Notas"></td>
                                                <td>15400</td>
                                                <td>PENDIENTE</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                                <td><a href="#" class="btn btn-xs btn-default" data-toggle="modal">Entregar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0008</td>
                                                <td>765376</td>
                                                <td>Fortuna</td>
                                                <td>Escuela Chachagua</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td><input type="text" placeholder="Notas"></td>
                                                <td>4060</td>
                                                <td>PENDIENTE</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                                <td><a href="#" class="btn btn-xs btn-default" data-toggle="modal">Entregar</a></td>
                                            </tr>
                                            <tr>
                                                <td>0009</td>
                                                <td>7687</td>
                                                <td>Pital</td>
                                                <td>Escula Gonzalo Monge</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td><input type="text" placeholder="Notas"></td>
                                                <td>39500</td>
                                                <td>PENDIENTE</td>
                                                <td><a href="#" class="btn btn-xs btn-success" data-toggle="modal">Actualizar</a></td>
                                                <td><a href="#" class="btn btn-xs btn-default" data-toggle="modal">Entregar</a></td>
                                            </tr>
                                        </table>
                                        <br><br><br>

                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-ped-realizados">
                                <div class="container container-tabla">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <tr class="info">
                                                <th>Número</th>
                                                <th>OEM</th>
                                                <th>Institución</th>
                                                <th>Detalle</th>
                                                <th>Total</th>
                                                <th>Estado</th>

                                            </tr>
                                            <tr>
                                                <td>0001</td>
                                                <td>45687</td>
                                                <td>Escuela Sucre</td>
                                                <td><a href="#">Ver Detalle</a></td>
                                                <td>60970</td>
                                                <td>ENTREGADO</td>
                                                <tr>
                                                    <td>0002</td>
                                                    <td>86460</td>
                                                    <td>CTP Fortuna</td>
                                                    <td><a href="#">Ver Detalle</a></td>
                                                    <td>112300</td>
                                                    <td>ENTREGADO</td>
                                                </tr>
                                                <tr>
                                                    <td>0003</td>
                                                    <td>876544</td>
                                                    <td>Escuela Republica de Italia</td>
                                                    <td><a href="#">Ver Detalle</a></td>
                                                    <td>10870</td>
                                                    <td>ENTREGADO</td>
                                                </tr>
                                                <tr>
                                                    <td>0004</td>
                                                    <td>9085</td>
                                                    <td>Escuela Porvenir</td>
                                                    <td><a href="#">Ver Detalle</a></td>
                                                    <td>7090</td>
                                                    <td>ENTREGADO</td>
                                                    <tr>
                                                        <td>0005</td>
                                                        <td>56886</td>
                                                        <td>Cen Cinai San Martin</td>
                                                        <td><a href="#">Ver Detalle</a></td>
                                                        <td>30080</td>
                                                        <td>ENTREGADO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>0006</td>
                                                        <td>76707</td>
                                                        <td>CTP Pital</td>
                                                        <td><a href="#">Ver Detalle</a></td>
                                                        <td>90750</td>
                                                        <td>ENTREGADO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>0007</td>
                                                        <td>87657</td>
                                                        <td>Liceo La Palmera</td>
                                                        <td><a href="#">Ver Detalle</a></td>
                                                        <td>15400</td>
                                                        <td>ENTREGADO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>0008</td>
                                                        <td>765376</td>
                                                        <td>Escuela Chachagua</td>
                                                        <td><a href="#">Ver Detalle</a></td>
                                                        <td>4060</td>
                                                        <td>ENTREGADO</td>
                                                    </tr>
                                                    <tr>
                                                        <td>0009</td>
                                                        <td>7687</td>
                                                        <td>Escula Gonzalo Monge</td>
                                                        <td><a href="#">Ver Detalle</a></td>
                                                        <td>39500</td>
                                                        <td>ENTREGADO</td>
                                                    </tr>
                                        </table>
                                        <br><br><br>

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
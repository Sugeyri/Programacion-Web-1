<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/logo.ico">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Inicio Sesion</title>
  <link rel="stylesheet" href="css/inicio-sesion.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <br><br><br><br><br><br><br><br>
      <form action="checklogin.php" method= "post" name="frmLogin">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input type="text" class="form-control" name="user" placeholder="Usuario">
        </div><br>
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input name="pass" type="password" class="form-control" placeholder="Contraseña">
        </div><br><br>
        <div>
          <input type="submit" class="btn btn-success btn-block" value="Ingresar" id="ingresar">
          <input type="button" class="btn btn-default btn-block" value="Seguir como invitado" id="invitado">
        </div>
      </form>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<br><br>

</html>
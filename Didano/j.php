
if(isset($_POST['buscador'])){
$texto = '';
$registros = '';
  $busqueda = trim($_POST['buscador']);

  $entero = 0;
  
  if (empty($busqueda)){
	  $texto = 'Búsqueda sin resultados';
  }else{
      
	  //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar
	  $sql = "SELECT * FROM producto WHERE nombre LIKE '%" .$busqueda. "%' ORDER BY nombre";
	  
	  $resultado = mysqli_query($conexion,$sql);
      //Si hay resultados...
	  if (mysqli_num_rows($resultado) > 0){ 
	     // Se recoge el número de resultados
		 $registros = '<p>HEMOS ENCONTRADO ' . mysqli_num_rows($resultado) . ' registros </p>';
	     // Se almacenan las cadenas de resultado
		 while($fila = mysqli_fetch_assoc($resultado)){ 
              $texto .= $fila['nombre'] . '<br />';
			 }
	  
	  }else{
			   $texto = "NO HAY RESULTADOS EN LA BBDD";	
      }
      echo $texto;
	  // Cerramos la conexión (por seguridad, no dejar conexiones abiertas)
	  mysqli_close($conexion);
  }
}




<div class="modal" id="buscar" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Buscar por nombre</h4>
                    </div>
                    <div class="modal-body">                      
                       <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" action=""> 
                <input id="buscar" name="buscar" type="search" placeholder="Busqueda por nombre" autofocus >
                <input type="submit" id="buscador" name="buscador" class="btn btn-xs btn-primary" value="Buscar">						
                       </form>
                    </div>
                </div>
            </div>
        </div>   
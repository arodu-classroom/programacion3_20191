<?php
  include "conexion.php";

  if(!empty($_POST)){

    $sql = "INSERT INTO `seccion3` (`nombres`, `apellidos`, `telefono`) VALUES ('".$_POST['nombre']."', '".$_POST['apellido']."', '".$_POST['telefono']."')";
    if($mysql->query($sql)){
      header("Location: index.php");
    }

  }

?>
<html>
  <head>
    <title>Agregar contacto</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <form action="add.php" method="POST">
      <div  class="control">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"/> 
      </div>

      <div class="control">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido"/> 
      </div>

      <div class="control">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono"/> 
      </div>
      <div class="btn-group">

      <input type="submit" name="" value="Guardar" class="btn">

      <a href="index.php" class="btn">Cancelar</a>

      </div>

    </form>
  </body>
</html>
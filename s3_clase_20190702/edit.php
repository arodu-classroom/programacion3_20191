<?php
  include "security.php";
  include "conexion.php";

  if(!empty($_GET)){
    $sql = "SELECT * FROM seccion3 WHERE id=".$_GET['id'];
    $result = $mysql->query($sql);
    $row = $result->fetch_array();
  }

  if(!empty($_POST)){

    $sql = "UPDATE `seccion3` SET `nombres` = '".$_POST['nombre']."', `apellidos` = '".$_POST['apellido']."', `telefono` = '".$_POST['telefono']."' WHERE `seccion3`.`id` = ".$_POST['id']."";
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
    <form action="edit.php?id=<?php echo $row['id'] ?>" method="POST">

      <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />

      <div class="control">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombres'] ?>" />
      </div>

      <div class="control">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido"  value="<?php echo $row['apellidos'] ?>"/>
      </div>

      <div class="control">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono"  value="<?php echo $row['telefono'] ?>"/>
      </div>

      <div class="btn-group">

      <input type="submit" name="" value="Guardar" class="btn">

      <a href="index.php" class="btn">Cancelar</a>

      </div>

    </form>
  </body>
</html>

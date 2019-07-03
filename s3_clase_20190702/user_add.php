<?php
  include "security.php";
  include "conexion.php";

  if(!empty($_POST)){

    $password = sha1($_POST['password']);

    $sql = "INSERT INTO `usuario_s3` (`username`, `password`) VALUES ('".$_POST['username']."', '".$password."')";
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
    <form action="user_add.php" method="POST">
      <div  class="control">
        <label for="username">Nombre de Usuario</label>
        <input type="text" name="username" id="username"/>
      </div>

      <div class="control">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password"/>
      </div>

      <div class="btn-group">

      <input type="submit" name="" value="Guardar" class="btn">

      <a href="index.php" class="btn">Cancelar</a>

      </div>

    </form>
  </body>
</html>

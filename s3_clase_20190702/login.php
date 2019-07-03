<?php
include "conexion.php";
session_start();

if(!empty($_POST)){

  $sql = 'SELECT * FROM usuario_s3 WHERE username="'.$_POST['username'].'" AND password="'.sha1($_POST['password']).'"';
  $result = $mysql->query($sql);
  $row = $result->fetch_array();

  if(!empty($row)){
    $_SESSION['user'] = $row;
    header('Location: index.php');
  }else{
    $flash = 'Usuario y/o Contraseña incorrecto';
  }
}

if(!empty($_GET['m']) && $_GET['m']=='3'){
  $flash = "Acceso no autorizado!";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <fieldset>
      <legend>Ingrese usuario y contraseña</legend>

      <?php if(!empty($flash)){ ?>
        <div class="">
          <?php echo $flash ?>
        </div>
      <?php } ?>

      <form class="" action="login.php" method="post">
        <div class="">
          <label for="username">Usuario</label>
          <input type="text" name="username" value="">
        </div>

        <div class="">
          <label for="password">Contraseña</label>
          <input type="password" name="password" value="">
        </div>

        <input type="submit" name="" value="Ingresar">
      </form>

    </fieldset>


  </body>
</html>

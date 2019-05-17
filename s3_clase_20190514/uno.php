<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <h1>Aplicacion php</h1>


  <form action="auth.php" method="POST">
    
    <div>
      <label for="username">Nombre de usuario</label>
      <input type="text" name="username" id="username" />
    </div>

    <div>
      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" />
    </div>

    <div>
      <input type="submit" value="Ingresar" />

    </div>

  </form>


<?php
    /*
    echo '<p>esto es con PHP</p>';

    $a = $_GET['a'];
    $b = $_GET['b'];

    $c = $a + $b;

    echo "$a + $b = $c<br/>";

    if($a > 4){
      echo 'El primer numero es mayor a 4';
    }else{
      echo 'El primer numero es menor a 4';
    }
    */
  ?>

</body>
</html>
  <?php 

    $u = $_POST['username'];
    $p =$_POST['password'];

    if($u == 'asd' && $p == 'asd'){
      echo '<h2>Bienvenido usuario</h2>';
    }else{
      echo 'Eror de autenticación';
    }
  
  ?>

  <a href="uno.php" > Volver </a>
<?php
  include "conexion.php";


  $sql = 'SELECT * FROM seccion2';
  $result = $mysql->query($sql);

  /*
  echo '<pre>';
  var_dump($result);
  echo '</pre>';
  */

?>

<html>
  <head>
    <title>Conectatos</title>

    <style type="text/css">
      table{
        width: 80%;
      }
      table th{
        background-color: #ccc;
      }
    </style>

  </head>
  <body>
    <h1>Libreta de contactos</h1>

    <table>
      <thead>
        <tr>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Telefono</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($result as $row){ ?>
        <tr>
          <td><?php echo $row['nombres'] ?></td>
          <td><?php echo $row['apellidos'] ?></td>  
          <td><?php echo $row['telefono'] ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>


  </body>
</html>


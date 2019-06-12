<?php
  include "conexion.php";
  
  $sql = "SELECT * FROM seccion3";

  $result = $mysql->query($sql);

/*
  echo '<pre>';
  var_dump($result);
  echo '</pre>'; */

?>

<html>
  <head>
    <title>Libreta de contactos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>Libreta de contactos</h1>

    <table>
      <thead>
        <tr>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Telefono</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($result as $row) { ?>
        <tr>
          <td><?php echo $row['nombres'] ?></td>
          <td><?php echo $row['apellidos'] ?></td>
          <td><?php echo $row['telefono'] ?></td>
          <td>
            <a href="edit.php?id=<?php echo $row['id'] ?>">Editar</a>
            <a href="delete.php?id=<?php echo $row['id'] ?>" onclick="if(!confirm('¿Desea borrar este elemento?')){ return false }">Borrar<a></td>
        </tr>
        <?php } ?>
      </tbody>

    </table>

    <hr/>
    <a href="add.php" class="btn">Agregar</a>

  </body>
</html>


<script type="text/javascript">
  /*confirm("confirm")
  alert('alert')
  input('asdasd')*/


</script>
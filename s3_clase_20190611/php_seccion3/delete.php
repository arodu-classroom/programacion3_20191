<?php
  include "conexion.php";


  $sql = "DELETE FROM seccion3 WHERE id=".$_GET['id'];

  if($mysql->query($sql)){
    header("Location: index.php");
  }

?>
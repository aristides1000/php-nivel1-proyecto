<?php
$link = mysqli_connect("localhost", "root", "", "pets_shop");

if (!$link) {
  die('Error de Conexión (' . mysqli_connect_errno() . ') '
    . mysqli_connect_error());
}
?>

<?php include './conexion.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Consultar</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <?php include './menu.php' ?>
  <table>
    <tr>
      <th>ID MASCOTA</th>
      <th>NOMBRE DE LA MASCOTA</th>
      <th>TIPO DE MASCOTA</th>
      <th>RAZA</th>
      <th>SEXO</th>
      <th>NOMBRE DEL CLIENTE</th>
      <th>FECHA DE NACIMIENTO</th>
    </tr>
    <?php
      $sql = "SELECT * FROM mascota";
      $result = mysqli_query($link, $sql); //ejecuto la consulta
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <tr>
        <td><?= $row['id_mascota']; ?></td>
        <td><?= $row['nombre_mascota']; ?></td>
        <td><?= $row['tipo_mascota']; ?></td>
        <td><?= $row['raza']; ?></td>
        <td><?= $row['sexo']; ?></td>
        <td><?= $row['nombre_cliente']; ?></td>
        <td><?= $row['fecha_nacimiento']; ?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
<?php include "./conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Modificar Formulario</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <?php
    $sql = "SELECT * FROM mascota WHERE id_mascota = '$_GET[mod]'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
  ?>
  <form id="form1" name="form1" method="post" action="modificar_logica.php">
    <label for="textfield">Nombre de la mascota: <input type="text" name="nombre_mascota" id="nombre_mascota" value="<?php print $row['nombre_mascota']; ?>" /></label>
    <label for="select">Tipo de mascota:
      <select name="tipo_mascota" id="tipo_mascota">
        <option value="<?php print $row['tipo_mascota']; ?>"><?php print $row['tipo_mascota']; ?></option>
        <option value="perro">Perro</option>
        <option value="gato">Gato</option>
        <option value="ave">Ave</option>
      </select>
    </label>
    <label for="textfield">Raza: <input type="text" name="raza" id="raza" value="<?php print $row['raza']; ?>" /></label>
    <legend>Sexo:</legend>
    <?php if ($row['sexo'] == 'femenino') { ?>
    <input type="radio" name="sexo" value="femenino" id="femenino" checked="checked" />
    <?php } else { ?> <input type="radio" name="sexo" value="femenino" id="femenino" /><?php } ?>
    <label for="femenino">Femenino</label>
    <?php if ($row['sexo'] == 'masculino') { ?>
    <input type="radio" name="sexo" value="masculino" id="masculino" checked="checked" />
    <?php } else { ?> <input type="radio" name="sexo" value="masculino" id="masculino" /><?php } ?>
    <label for="masculino">Masculino</label>
    <label for="textfield3">Nombre del cliente: <input type="text" name="nombre_cliente" id="nombre_cliente" value="<?php print $row['nombre_cliente']; ?>" /></label>
    <label id="fecha_nacimiento">fecha de nacimiento: <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" min="1950-01-01" max="<?= date("Y-m-d") ?>" value="<?php print $row['fecha_nacimiento']; ?>" required /></label>
    <input type="hidden" name="oculto" id="oculto" value="<?php print $row['id_mascota']; ?>" />
    <input type="submit" name="submit" id="submit" value="Enviar">
  </form>
</body>
</html>
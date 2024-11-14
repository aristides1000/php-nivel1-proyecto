<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insertar</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <?php include './menu.php' ?>

  <form method="post" action="./insertar_logica.php">
    <label id="nombre_mascota">Nombre de la mascota: <input id="nombre_mascota" name="nombre_mascota" type="text" required /></label>
    <label id="tipo_mascota">Tipo de mascota:
      <select id="tipo_mascota" name="tipo_mascota" required>
        <option value="">Elige Una</option>
        <option value="perro">Perro</option>
        <option value="gato">Gato</option>
        <option value="ave">Ave</option>
      </select>
    </label>
    <label id="raza">Raza: <input id="raza" name="raza" type="text" required /></label>
    <legend>Sexo:</legend>
    <input type="radio" name="sexo" id="femenino" value="femenino" required>
    <label for="femenino">Femenino</label>
    <input type="radio" name="sexo" id="masculino" value="masculino">
    <label for="masculino">Masculino</label>
    <label id="nombre_cliente">Nombre del cliente: <input id="nombre_cliente" name="nombre_cliente" type="text" required /></label>
    <label id="fecha_nacimiento">fecha de nacimiento: <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" min="1950-01-01" max="<?= date("Y-m-d") ?>" required /></label>
    <input id="registrar" name="Registrar" type="submit" />
    <input id="limpiar" name="Limpiar" type="reset" />
  </form>
</body>
</html>
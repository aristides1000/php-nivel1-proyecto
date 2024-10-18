CREATE DATABASE IF NOT EXISTS pets_shop;

CREATE TABLE mascota (
  id_mascota INT NOT NULL AUTO_INCREMENT,
  nombre_mascota VARCHAR(255),
  tipo_mascota VARCHAR(255),
  raza VARCHAR(255),
  sexo VARCHAR(10),
  nombre_cliente VARCHAR(255),
  fecha_nacimiento DATE,
  PRIMARY KEY (id_mascota)
);

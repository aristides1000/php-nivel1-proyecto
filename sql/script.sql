CREATE DATABASE IF NOT EXISTS pets_shop;

USE pets_shop;

CREATE TABLE IF NOT EXISTS mascota (
  id_mascota INT NOT NULL AUTO_INCREMENT,
  nombre_mascota VARCHAR(255),
  tipo_mascota VARCHAR(255),
  raza VARCHAR(255),
  sexo VARCHAR(10),
  nombre_cliente VARCHAR(255),
  fecha_nacimiento DATE,
  PRIMARY KEY (id_mascota)
);

INSERT INTO mascota (id_mascota, nombre_mascota, tipo_mascota, raza, sexo, nombre_cliente, fecha_nacimiento) values (1, 'Jefferey', 'perro', 'pitbull', 'masculino', 'Pickthorne', '2022-10-14'), (2, 'Brocky', 'gato', 'ciames', 'masculino', 'Hazel', '2023-01-02'), (3, 'Penelopa', 'ave', 'canario', 'femenino', 'Boddie', '2024-11-11'), (4, 'Morie', 'perro', 'pastor', 'masculino', 'Gotts', '2023-11-03'), (5, 'Mei', 'gato', 'Birmano', 'femenino', 'Van Oort', '2023-03-21');

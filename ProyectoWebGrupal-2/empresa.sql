-- Crear la base de datos
CREATE DATABASE empresa;

-- Utilizar la base de datos
USE empresa;

-- Eliminar las tablas existentes si es necesario
DROP TABLE IF EXISTS cliente;
DROP TABLE IF EXISTS staff;
DROP TABLE IF EXISTS viajes;

-- Crear la tabla cliente
CREATE TABLE cliente (
  DNI INT(8) NOT NULL,
  Nombre VARCHAR(30) NOT NULL,
  PRIMARY KEY (DNI)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Crear la tabla staff
CREATE TABLE staff (
  DNI INT(8) NOT NULL,
  Contraseña VARCHAR(50) NOT NULL,
  Email VARCHAR(50) NOT NULL,
  PRIMARY KEY (DNI)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Crear la tabla viajes
CREATE TABLE viajes (
  DNI INT(8) NOT NULL,
  fecha_salida DATETIME NOT NULL,
  fecha_entrada DATETIME NOT NULL,
  FOREIGN KEY (DNI) REFERENCES cliente(DNI)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO staff (Contraseña, Email, DNI) VALUES ('contraseña', 'correo@example.com', 12345678);



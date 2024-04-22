DROP DATABASE IF EXISTS gimnasio;

CREATE DATABASE gimnasio;
USE gimnasio;

CREATE TABLE usuarios(
     nombre varchar(45) NOT NULL,
     apellidos varchar(45) NOT NULL,
     usuario varchar(45) PRIMARY KEY,
     clave varchar(45) NOT NULL,
     admin boolean NOT NULL
);

CREATE TABLE rutinas(
     id_rutina int AUTO_INCREMENT PRIMARY KEY,
     nombreRutina varchar(45) NOT NULL,
     descripcion varchar(255) NOT NULL,
     ruta varchar(40) NOT NULL,
     imagen varchar(40) NOT NULL
);
CREATE TABLE permisos(
     usuario varchar(45),
     id_rutina int,
     permiso boolean NOT NULL,
     PRIMARY KEY (usuario, ID_rutina),
     FOREIGN KEY (usuario) REFERENCES usuarios(usuario),
     FOREIGN KEY (id_rutina) REFERENCES rutinas(id_rutina)
);

INSERT rutinas VALUES
(NULL, "Tren superior (espalda)", "Enfócate en mejorar tu espalda", "espalda.php", "espalda.jpg"),
(NULL, "Tren superior (brazos)", "No reconocerás tus brazos tras esta rutina", "brazos.php", "brazos.jpg"),
(NULL, "Tren inferior (cuádriceps)", "Potencia tus cuádriceps con esta rutina", "cuadriceps.php", "cuadriceps.jpg"),
(NULL, "Tren inferior (glúteos)", "Aumenta tus glúteos", "gluteos.php", "gluteos.jpg"),
(NULL, "Cardio (correr)", "Aprende a correr de 0 a 5 km", "correr.php", "correr.jpg");

INSERT usuarios VALUES
("Paula", "Oliva Arellano", "Paula.Oliva", 112233, 0),
("admin", "admin", "Admin", 123456, 1);

INSERT permisos VALUES
("Paula.Oliva", 1, 0),
("Paula.Oliva", 2, 1),
("Paula.Oliva", 3, 1),
("Paula.Oliva", 4, 1),
("Paula.Oliva", 5, 0);
CREATE DATABASE registro_usuarios;​

USE registro_usuarios;​

​

CREATE TABLE usuarios (​

    id INT AUTO_INCREMENT PRIMARY KEY,​

    nombre VARCHAR(50) NOT NULL,​

    primer_apellido VARCHAR(50) NOT NULL,​

    segundo_apellido VARCHAR(50) NOT NULL,​

    correo VARCHAR(100) UNIQUE NOT NULL,​

    celular VARCHAR(15) NOT NULL,​

    password VARCHAR(255) NOT NULL​

);
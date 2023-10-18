/*Se crea la base de datos y accedo a su uso*/
CREATE DATABASE logical;
USE logical;

/*Se crea tabla de empleados con id auto incrementable*/
CREATE TABLE empleado(
	id_empleado INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
	cedula BIGINT NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    telefono BIGINT NOT NULL,
    correo VARCHAR(200) NOT NULL,
    contrasena VARBINARY(80) NOT NULL
    );
    
    /*Se crea tabla cargo conexión uno a uno con la tabla empelado*/
CREATE TABLE cargo(
	id_cargo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	cargo VARCHAR(200),
	CONSTRAINT fk_cargo FOREIGN KEY(id_cargo) REFERENCES empleado(id_empleado)
    );
        
	/*Se crea tabla horario conexión uno a uno con la tabla de empleado*/
CREATE TABLE horario(
	id_horario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    horario_semana VARCHAR(20),
    CONSTRAINT fk_horario FOREIGN KEY(id_horario) REFERENCES empleado(id_empleado)
    );
    
    /*Iserto datos un dato de prueba en las tablas*/
    /*enciptar encryp() y Desencrptar clave aes_descript();*/
    INSERT INTO empleado(nombre,apellido,cedula,fecha_nacimiento,telefono,correo,contrasena)
    VALUES('Brayan Stiven','Gómez Banguera',1111249800,'2000-08-17',3206279311,'AdminBrayan@gmail.com',aes_encrypt('contrasena','BrayanAdmin'));
    
    INSERT INTO cargo (cargo) VALUES('Supervisor');
    
    INSERT INTO horario(horario_semana) VALUES ('6:00 am; 2:40 pm');
    

    

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
    contrasena VARBINARY(80) NOT NULL,
    cargo VARCHAR(100)
    );
    
    /*Se crea tabla cargo conexión uno a uno con la tabla empelado*/
CREATE TABLE cargo(
	id_cargo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	cargo VARCHAR(200),
	CONSTRAINT fk_cargo FOREIGN KEY(id_cargo) REFERENCES empleado(id_empleado)
    ON DELETE CASCADE
    );
        
	/*Se crea tabla horario conexión uno a uno con la tabla de empleado*/
-- CREATE TABLE horario(
-- 	id_horario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
--     horario_semana VARCHAR(20),
--     CONSTRAINT fk_horario FOREIGN KEY(id_horario) REFERENCES empleado(id_empleado)
--     ON DELETE CASCADE
--     );
    
CREATE TABLE asistencia(
	id_asistencia INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_empleado INT NOT NULL,
    empresa VARCHAR(150),
    hora_entrada VARCHAR(150),
    hora_salida VARCHAR(150),
    jornada VARCHAR (150),
    area VARCHAR(100),
    CONSTRAINT fk_asistencia FOREIGN KEY (id_asistencia) REFERENCES empleado(id_empleado)
    ON DELETE CASCADE
    );
    
    CREATE TABLE salario(
    id_salario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    salario DECIMAL(7,3),
    horas_cantidad INT,
    horas_valor DECIMAL(7,3),
    CONSTRAINT fk_salario FOREIGN KEY (id_salario) REFERENCES empleado(id_empleado)
    ON DELETE CASCADE
    );
    /*Iserto datos un dato de prueba en las tablas*/
    /*enciptar encryp() y Desencrptar clave aes_descript();*/
    
    INSERT INTO empleado(nombre,apellido,cedula,fecha_nacimiento,telefono,correo,contrasena,cargo)
    VALUES('Brayan Stiven','Gómez Banguera',1111249800,'2000-08-17',3206279311,'AdminBrayan@gmail.com','202cb962ac59075b964b07152d234b70','Supervisor');
    
    INSERT INTO cargo (cargo) VALUES('Supervisor');
    
    INSERT INTO horario(horario_semana) VALUES ('6:00 am; 2:40 pm');
    INSERT INTO salario(horas_cantidad,horas_valor,salario) VALUES(2,4.936,1160.000);
select * from empleado


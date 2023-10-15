/*Creo la base de datos y accedo a su uso*/
CREATE DATABASE logical;

GO

USE logical;

GO
/*se crea tabla de empleados con id auto incrementable*/
CREATE TABLE empleado(
	id_empleado INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	nombre VARCHAR(100) NOT NULL,
	apellido VARCHAR(100) NOT NULL,
	cedula BIGINT NOT NULL,
	fecha_de_nacimiento DATE NOT NULL,
	telefono BIGINT NOT NULL,
	correo VARCHAR(200) NOT NULL,
	contrasena VARBINARY(MAX) NOT NULL,
	);

	GO
/*creación tabla cargo conección uno a uno con la tabla de empleado*/

CREATE TABLE cargo(
	id_cargo INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	CONSTRAINT fk_cargo FOREIGN KEY (id_cargo) REFERENCES empleado(id_empleado),
	cargo VARCHAR(200)
	);

	GO

/*Creación tabla horarios*/
CREATE TABLE horario(
	id_horario INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	horario_semana varchar(200),
	CONSTRAINT fk_horario_semana FOREIGN KEY (id_horario) REFERENCES empleado(id_empleado)
);

/*Agrego los campos de hora de entrada y hora de salida a la tabla horario*/

ALTER TABLE horario ADD hora_entrada DATETIME;

ALTER TABLE horario ADD hora_salida DATETIME;
GO



/*Inserto valores a la tabla empleado*/
INSERT INTO empleado(nombre,apellido,cedula,fecha_de_nacimiento,telefono,correo,contrasena) 

VALUES ('Brayan Stiven','Gomez Banguera',1111749800,'2000-08-17',3206279311,'AdminBray@gmail.com',PWDENCRYPT('BrayAdmin'));

GO
/*Inserto valores a la tabla cargo */
INSERT INTO cargo(cargo) VALUES('Supervisor');

GO

/*Inserto valores a la tabla horario */
INSERT INTO horario(horario_semana) VALUES('6:00 am; 2:40 pm')




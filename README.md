# proyecto logical 

![img](https://th.bing.com/th/id/OIP.i4kTIYPOVCdk-uS872QCcwHaE8?pid=ImgDet&rs=1)

logical un proyecto desempeñado con un papel crusial en el desarrollo de la humanidad a lo largo de la historia desde los origenes de la **logistica** por tranportar bienes y suministros, hasta los sistemas maas complejos de gestion y distribucion ***la logistiva ha evolucionado hasta convertirse en un eje fundamental del mundo empresarial***.

## idea del proyecto logical 

logical mas conocido como ***proyecto logistico*** fue creado con la idea de poder llevar un orden atravez de varios cambios de **bases de datos**, organizacion practico de la logistica y cago de los empleados de las empresa.
les dejaremos un pequeño enlace  que nos ayudara a llevar mas en contesto sobre el proyecto.
[logistica empresarial](https://emprendepyme.net/la-logistica-empresarial.html)


## sincronizacion

utilizamos este medio de cincronizacion para subir todos los archivos de cambio del programa **git** y **github** ya que este medio permite o nos ayuda a suguir escribiendo o trabar desde otros disposotivos, colaborar con las personas con las que compartimos nuestros archivos 

> para poder empezaar hacer este tipo de sincronizacion solo ingresamos a iniciar varias sesiones en google y en el menu.

- este archivo de github mas conocido como un modo de sincronizacion de archivos mantendra un espacio sincronizado con todos los proyectos a enviar ***git*** y ***github***

![img](https://th.bing.com/th/id/OIP.sP8sKV0TlTT6LUEB8Hr9tgHaHa?pid=ImgDet&rs=1)

### contactos bases de datos 

![img](https://th.bing.com/th/id/R.839c6cb93f6fa3f2d4212c8184e2a3fa?rik=1tTiAzw55n8Rfw&riu=http%3a%2f%2fcocinasintegralesgioserman.com%2fimages%2fcontactanos.jpg&ehk=vKTNLyWEz2fcTipKiD6H0tqO5tr8wAtZrB6w1C1IXDI%3d&risl=&pid=ImgRaw&r=0)

una base de datos mas conocida como ***mysql**es una herramienta fundamental que guarda grandes cantidades de informacion organizada, ya que una base de datos sirve para. 

- Almacenar informacion de diferentes ambitos.

- Facilitar las consultas, busquedas,ingresos y modificacion de datos desde un ordenador.

- delegar obligaciones y definir jurisdicciones en todo tipo de empresa.

- matricular alumnos y profesores en los colegios 

una muestra de bases de datos de **mysql** podria ser de esta manera 


```javascript

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `empresa` varchar(150) DEFAULT NULL,
  `hora_entrada` varchar(150) DEFAULT NULL,
  `hora_salida` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


 Volcado de datos para la tabla `asistencia`


INSERT INTO `asistencia` (`id_asistencia`, `id_empleado`, `empresa`, `hora_entrada`, `hora_salida`) VALUES
(2, 2, 'Outlet', '7:00 pm', '8:00 am'),
(4, 4, 'Logical', '6:30 am', '5:00 pm');




 Estructura de tabla para la tabla `cargo`


CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `cargo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


 Volcado de datos para la tabla `cargo`


INSERT INTO `cargo` (`id_cargo`, `cargo`) VALUES
(2, 'Operario'),
(4, 'Supervisor');




 Estructura de tabla para la tabla `empleado`


CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL, 
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `contrasena` varbinary(80) NOT NULL,
  `cargo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


 Volcado de datos para la tabla `empleado`


INSERT INTO `empleado` (`id_empleado`, `nombre`, `apellido`, `cedula`, `fecha_nacimiento`, `telefono`, `correo`, `contrasena`, `cargo`) VALUES
(2, 'Duvian Alexis', 'Hidalgo', 321654789, '2000-08-17', 321456654, 'Duvian@gmail.com', 0x6366613837353034346133376565373365613132363037643061623562316134, 'Operario'),
(4, 'Aura Milena ', 'Gómez Banguera', 654321, '1978-06-04', 654987, 'Aura@gmail.com', 0x3463356364333833343034346635326630356162656139376330333035326563, 'Supervisor'),
(8, 'jhon', 'Hidalgo', 545487654, '2002-12-20', 654321, 'Jhon@gmail.com', 0x3932393537653530646539383833663431336663636665383561633164383137, 'Operario'),
(9, 'jhon', 'Hidalgo', 2343425, '1978-06-04', 3452345, 'Jhon@gmail.com', 0x3932393537653530646539383833663431336663636665383561633164383137, 'Operario'),
(10, 'Duvian Alexis', 'Hidalgo', 8768, '0000-00-00', 8796, 'Duvian@gmail.com', 0x6366613837353034346133376565373365613132363037643061623562316134, 'Operario'),
(11, 'asdf', 'sdf', 34245, '2002-12-20', 34545, 'g.nayarb112@gmail.com', 0x3637333335316263393064393565323530633736343739383939333439333633, 'Operario'),
(12, 'Samuel', 'Humanes', 2132, '2001-08-20', 5654654, 'g.nayarb112@gmail.com', 0x3637333335316263393064393565323530633736343739383939333439333633, 'Bodeguero');

```

# registros bases de datos 

## Create 

es la sentencia SQL para crear las diferentes tablas que conformarán nuestras bases de datos relacionales

![visualizacion de la tabla](https://i.ytimg.com/vi/um5LcDFMrA4/maxresdefault.jpg)

## Alter table

es la sentencia *SQL* para para añadir, eliminar o modificar columnas en una tabla, así como para agregar o suprimir restricciones en la misma.

```javascript
ALTER TABLE 'cargo'
 ADD CONSTRAINT 'fk_cargo' FOREIGN KEY ('id_cargo') HACE REFERENCIA A 'EMPLEADO' ('id_empleado') EN DELETE CASCADE;

```

# Errores constantes 
Otro síntoma de que la **logística avanzada** en tu empresa se está haciendo de forma incorrecta, es cuando existen retrasos constantes en la preparación de los pedidos y hasta incluso en la recepción de los materiales.

De igual forma, suelen ocurrir errores en cuanto a la marcación e identificación de los productos, molestias en los clientes por entregas que han sido realizadas de forma incompleta o tardía, y hasta incluso incurrir en el error de facturar artículos que ni tan siquiera han sido entregados.

![error de ruteo](https://image.slidesharecdn.com/erroryestabilidad-111207142040-phpapp01/95/erroryestabilidad-13-728.jpg?cb=1323269338)


# Tecnologias usadas

- php ![php](https://www.alamy.es/imagenes/php.html?sortBy=relevant)

- html5 ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)

- javascript ![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)

- css ![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)

# Uso practico de la aplicacion 
### Administrar usuarios
esta tarea de administracion de usuarios ***especifica o incluyen el establecimiento de muchas preferencias del usuario*** y el cambio de contraseñas y roles de ellos, incluso tienen filtros de datos de todo suceso y la preferencia de listas de sucesos. y ademas cualquier usuario puede cambiar su propia contraseña, correo e.t.c...

![administracion de usuarios](https://www.nutrimind.net/images/news/usurio_administrador.jpg)
### Administrar tareas 
la administracion de tareas **tiene como rol el aprovechamiento de cumplir muchas funciones** y vamos a empezar explicándote de una forma sencilla que es exactamente ese administrador de tareas sobre el que seguramente has escuchado hablar cuando alguien te expone soluciones para muchos problemas de programas del ordenador y entre muchas otras cosas  

![administracion de tareas](https://ablog.managemart.com/images/o_1dnpgpc711vd4r5d5e781f10vs8.png)











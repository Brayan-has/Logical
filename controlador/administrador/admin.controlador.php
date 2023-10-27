<?php
// session_start();
//accedo a la base de datos 
include_once "../../modelo/conexion_bd.php";

//separo en dos variables los campos que se van a envíar  en la consulta
//y las descompondré por medio del uso de real_scape_string() #me cuesta entender como funciona 
$columnas = ['id_empleado', 'nombre', 'apellido', 'cedula', 'correo', 'cargo'];
$tablas = "empleado";


//valido si existe contenido 'buscar', en caso no exista esé devolverá null
$campo = isset($_POST['buscar']) ? $conexion->real_escape_string($_POST['buscar']) : null;


$where = '';

//si el campo es diferente de null entrará en la validación y leerá la estructura para la consulta sql
if ($campo != null) {
    $where = "WHERE (";

    $count = count($columnas);
    for ($i = 0; $i < $count; $i++) {
        $where .= $columnas[$i] . " LIKE '%" . $campo . "%' or ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}


$sql = "SELECT" . "  " . implode(", ", $columnas) . "
FROM $tablas
$where";

$resultado = $conexion->query($sql);

$num_rows = $resultado->num_rows;

$html = '';

//devuelvo los resultados por medio de un bucle
//para la función que se ralizará por medo de ajax para busqueda de usuarios en la base de datos y obtener una vista
//## se me fue imposible encontrar el error en ajax, por ende no se conecta js con las tablas resultando en una interfaz corrupta
if ($_SESSION['cargo'] == "Supervisor" or $_SESSION['cargo'] == "Administrador") {
    if ($num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {

            echo '<tr>';
            echo '<td>' . $row['id_empleado'] . '</td>';
            echo '<td>' . $row['nombre'] . '</td>';
            echo '<td>' . $row['apellido'] . '</td>';
            echo '<td>' . $row['cedula'] . '</td>';
            echo '<td>' . $row['correo'] . '</td>';
            echo '<td>' . $row['cargo'] . '</td>';
            echo '</tr>';

        }
    } else {

        echo '<tr>';
        echo '<td colspan="8"><h1>Sin resultados</h1></td>';
        echo '</tr>';
    }

}else{

    if ($num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {

            echo '<tr>';
            echo '<td>' . $row['id_empleado'] . '</td>';
            echo '<td>' . $row['nombre'] . '</td>';
            echo '<td>' . $row['apellido'] . '</td>';
            echo '<td>' . $row['cedula'] . '</td>';
            echo '<td>' . $row['correo'] . '</td>';
            echo '<td>' . $row['cargo'] . '</td>';
            // echo '<td>' . $row['jornada'] . '</td>';
            // echo '<td>' . $row['area'] . '</td>';
            echo '</tr>';

        }
    } else {

        echo '<tr>';
        echo '<td colspan="8"><h1>Sin resultados</h1></td>';
        echo '</tr>';
    }



}
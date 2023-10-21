<?php

include_once "../modelo/conexion_bd.php";

$columnas = ['id_empleado', 'nombre', 'apellido', 'cedula', 'correo', 'cargo'];
$tablas = "empleado";

$campo = isset($_POST['buscar']) ? $conexion->real_escape_string($_POST["buscar"]) : NULL;
$sql = "SELECT" . implode(", ", $columnas) . "
FROM $tablas";
$resultado = $conexion->query($sql);

$num_rows = $resultado->num_rows;

$html = '';
if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>'.$row['id_empleado'].'</td>';
        $html .= '<td>'.$row['nombre'].'</td>';
        $html .= '<td>'.$row['apellido'].'</td>';
        $html .= '<td>'.$row['cedula'].'</td>';
        $html .= '<td>'.$row['correo'].'</td>';
        $html .= '<td>'.$row['cargo'].'</td>';
        $html .= '<td><a href="">Editar</a></td>';
        $html .= '<td><a href="">Eliminar</a></td>';
        $html .= '</tr>';
    }
} else {

    $html .='<tr>';
    $html .='<td colspan="8">Sin resultados</td>';
    $html .='</tr>';
}

echo json_encode($html,JSON_UNESCAPED_UNICODE);
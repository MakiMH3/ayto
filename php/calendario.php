<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}
// Conexión a la base de datos MySQL
$host = '10.4.14.71';
$user = 'mysql_user';
$pass = 'Hum1ll@d3r0';
$dbname = 'humilladero';

$conexion = new mysqli($host, $user, $pass, $dbname);
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Consulta a la tabla de eventos
$nombre_usuario=$_SESSION['username'];
$sql = "SELECT id, nombre, empieza, termina, color FROM tbl_calendario WHERE usuario='$nombre_usuario'";
$resultado = $conexion->query($sql);

// Generación de salida en formato JSON
$eventos = array();
while ($fila = $resultado->fetch_assoc()) {
    $evento = array();
    $evento['id'] = $fila['id'];
    $evento['title'] = $fila['nombre'];
    $evento['start'] = $fila['empieza'];
    $evento['end'] = $fila['termina'];
    $evento['color'] = $fila['color'];
    array_push($eventos, $evento);
}
echo json_encode($eventos);

// Cierre de la conexión a la base de datos
$conexion->close();
?>

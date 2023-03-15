<?php
// Establecer conexión con la base de datos MySQL
$servername = "10.4.14.71";
$username = "mysql_user";
$password = "Hum1ll@d3r0";
$dbname = "humilladero";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Recuperar los datos del evento
$id = $_POST['id'];
$start = $_POST['start'];
$end = $_POST['end'];

// Consulta de actualización
$sql = "UPDATE tbl_calendario SET empieza='$start', termina='$end' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    // Mostrar mensaje de éxito
    echo "El evento se ha actualizado correctamente.";
} else {
    // Mostrar mensaje de error
    echo "Error al actualizar el evento: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

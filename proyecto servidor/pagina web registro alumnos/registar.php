<?php
// Conexión a la base de datos
$conexion = new mysqli("192.168.100.112", "pedro", "asquerosito", "BDserver");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$grado = $_POST["grado"];

var_dump($nombre, $apellido, $grado);

// Insertar datos en la tabla alumnos
$sql = "INSERT INTO alumnos (nombre, apellido, grado) VALUES ('$nombre', '$apellido', $grado)";

if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>

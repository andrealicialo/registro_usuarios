<?php
$host = "localhost";
$usuario = "root";  // Usuario por defecto en XAMPP
$clave = "";        // Sin contraseña por defecto en XAMPP
$base_datos = "registro_usuarios";

$conn = new mysqli($host, $usuario, $clave, $base_datos);

if ($conn->connect_error) {
    die("❌ Error en la conexión: " . $conn->connect_error);
}
?>

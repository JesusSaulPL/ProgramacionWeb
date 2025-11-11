<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basedatos = "sc71";

$conexion = new mysqli($servidor, $usuario, $clave, $basedatos);

if ($conexion->connect_error) {
    die("❌ Error de conexión: " . $conexion->connect_error);
} else {
    echo "Conectado exitosamente<br>";
}
?>

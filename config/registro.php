<?php
include("conexion.php");
print_r($_POST);

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$empresa = isset($_POST['empresa']) ? $_POST['empresa'] : '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';

try {
    $conexion = new PDO('mysql:host='.$direccionServidor.';dbname='.$baseDatos, $usuario, $contrasenaBD);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conexion->prepare('INSERT INTO contacto (nombre, apellidos, correo, empresa, telefono, menaje, fecha) VALUES (:nombre, :apellidos, :correo, :empresa, :telefono, :menaje, NOW())');
    $statement->execute(array(
        ':nombre' => $nombre,
        ':apellidos' => $apellidos,
        ':correo' => $correo,
        ':empresa' => $empresa,
        ':telefono' => $telefono,
        ':menaje' => $mensaje
    ));
    echo 'Información enviada correctamente';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>

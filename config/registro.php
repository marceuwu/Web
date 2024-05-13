<?php
include("conexion.php");

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$empresa = isset($_POST['empresa']) ? $_POST['empresa'] : '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
$mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';

// Validar si algún campo está vacío
if (empty($nombre) || empty($correo) || empty($empresa) || empty($telefono) || empty($mensaje)) {
    $errores['Datos'] = "Todos los campos son obligatorios";
}

// Validar formato de correo
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El formato del correo electrónico es inválido";
}

// Validar que el nombre contenga solo letras
if (!preg_match("/^[a-zA-Z ]*$/", $nombre)) {
    $errores[] = "El nombre solo puede contener letras y espacios";
}

// Validar que el teléfono contenga solo números
if (!preg_match("/^[0-9]*$/", $telefono)) {
    $errores[] = "El teléfono solo puede contener números";
}

if (empty($errores)) {
    try {
        $conexion = new PDO('mysql:host=' . $direccionServidor . ';dbname=' . $baseDatos, $usuario, $contrasenaBD);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = $conexion->prepare('INSERT INTO contacto (nombre, correo, empresa, telefono, mensaje, fecha) VALUES (:nombre, :correo, :empresa, :telefono, :mensaje, NOW())');
        $statement->execute(array(
            ':nombre' => $nombre,
            ':correo' => $correo,
            ':empresa' => $empresa,
            ':telefono' => $telefono,
            ':mensaje' => $mensaje
        ));
        header('Location: contacto.php?exito=true'); // Redireccionar a contacto.php con éxito como parámetro
        exit();
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
} else {
    // Si hay errores, redirigir de nuevo a contacto.php con los errores como parámetros GET
    header('Location: ../contacto.php?errores=' . urlencode(implode("\\n", $errores)));
    exit();
}
?>

<?php

$direccionServidor = "localhost";
$baseDatos = "soprade";
$usuario = "root";
$contrasenaBD = "";

try {
    $conexion = new PDO("mysql:direccionServidor=$direccionServidor;baseDatos=$baseDatos",$usuario,$contrasenaBD);
    if($conexion){
        echo "Conexión exitosa ";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
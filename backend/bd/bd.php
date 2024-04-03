<?php
$hostname='localhost';
$nombreUsuario='sistemaestbel1';
$contraseña='Estbel224*';
$nombreBaseDatos='sistemaestbel';

$conexion = mysqli_connect($hostname , $nombreUsuario , $contraseña,$nombreBaseDatos);
if ($conexion->connect_errno) {
    die("error de conexión: " . $mysqli->connect_error);
}


?>


 
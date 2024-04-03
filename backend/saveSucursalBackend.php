<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true);
 $nombre = $data['nombre'];
 $empresa = $data['empresa'];
 $direccion = $data['direccion'];
 $ciudad = $data['ciudad'];
 $estado = $data['estado'];
 $sql = "INSERT INTO  sucursales (nombre,empresa,direccion,ciudad,estado) values('$nombre','$empresa' ,  '$direccion','$ciudad', '$estado') ";
    $query = $conexion->query($sql);

    echo json_encode($query);
   
?>
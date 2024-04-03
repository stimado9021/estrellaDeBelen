<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true);
 $dni = $data['dni'];
 $nombre = $data['nombre'];
 $contacto = $data['contacto'];
 $direccion = $data['direccion'];
 $ciudad = $data['ciudad'];
 $estado = $data['estado'];
 $sql = "INSERT INTO   clientes (dni,nombre,contacto,direccion,ciudad,estado) values('$dni' ,'$nombre' , '$contacto' , '$direccion', '$ciudad', '$estado') ";
    $query = $conexion->query($sql);
    echo json_encode($query);
   
?>
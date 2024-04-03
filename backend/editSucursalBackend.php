<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true);
 $id = $data['id'];
 $nombre = $data['nombre'];
 $empresa = $data['empresa'];
 $codigo = $data['codigo'];
 $serie = $data['serie'];
 $direccion = $data['direccion'];
 $ciudad = $data['ciudad'];
 $estado = $data['estado'];
 
 $sql = "UPDATE sucursales SET nombre = '$nombre',empresa = '$empresa',codigo = '$codigo',serie = '$serie',direccion = '$direccion',ciudad='$ciudad',estado='$estado' where id='$id' ";
    $query = $conexion->query($sql);

    echo json_encode($query);
  
?>
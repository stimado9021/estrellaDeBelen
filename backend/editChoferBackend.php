<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true);
 $id = $data['id'];
 $nombre = $data['nombre'];
 $email = $data['email'];
 $licencia = $data['licencia'];
 
 $sql = "UPDATE choferes SET nombre = '$nombre',email = '$email',licencia = '$licencia' where id='$id' ";
    $query = $conexion->query($sql);

    echo json_encode($query);
  
?>
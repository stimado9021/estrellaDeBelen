<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true);
 $idUsuario = $data['id'];
 $RegistroVisita = $data['t'];
if(!$RegistroVisita){
   $sql = "INSERT INTO   asistencia (idUsuario) values('$idUsuario') ";
}else{
   // date_create_from_format('Y-m-d', $Registro )
   $sql = "INSERT INTO   asistencia (idUsuario,RegistroVisita) values('$idUsuario','$RegistroVisita') ";
}
 
    $query = $conexion->query($sql);

    echo json_encode($query);
   
?>
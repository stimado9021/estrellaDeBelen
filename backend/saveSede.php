<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true); 
 $nombreSede = $data['sede'];

 $sql = "INSERT INTO  sede (nombreSede) values('$nombreSede') ";
    $query = $conexion->query($sql);

    echo json_encode($query);
   
?>
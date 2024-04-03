<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true); 
 $Profesion = $data['profesion'];

 $sql = "INSERT INTO  Profesion (Profesion) values('$Profesion') ";
    $query = $conexion->query($sql);

    echo json_encode($query);
   
?>
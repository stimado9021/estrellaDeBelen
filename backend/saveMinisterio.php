<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true); 
 $ministerio = $data['minis'];

 $sql = "INSERT INTO   ministerio (ministerio) values('$ministerio') ";
    $query = $conexion->query($sql);

    echo json_encode($query);
   
?>
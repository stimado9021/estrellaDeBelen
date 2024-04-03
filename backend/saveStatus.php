<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true); 
 $status = $data['sta'];

 $sql = "INSERT INTO  statusrole (status) values('$status') ";
    $query = $conexion->query($sql);

    echo json_encode($query);
   
?>
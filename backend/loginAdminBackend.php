<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true);
 $nombre = $data['nombre'];
 $password = $data['password'];
 $sql = "SELECT * FROM  usuario where nombre = '$nombre' and password = '$password' ";
    $query = $conexion->query($sql);
    $r = $query->fetch_assoc();
    if(!empty($r)){
        echo json_encode($r);
    }else{
        echo 0;
    }
?>
<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true);
 $id = $data['id'];

 
    $sql = "DELETE FROM usuario  WHERE  id = '$id' ";
    $query = $conexion->query($sql);

     echo json_encode($query);
     mysqli_close($conexion);
?>
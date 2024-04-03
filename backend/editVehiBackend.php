<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true);
 $id = $data['id'];
 $placa = $data['placa'];
 $marca = $data['marca'];
 $modelo = $data['modelo'];
 $nro = $data['nro'];
 $chofer = $data['chofer'];
 
 $sql = "UPDATE vehiculos SET placa = '$placa',marca = '$marca',modelo = '$modelo',nro = '$nro',chofer = '$chofer' where id='$id' ";
    $query = $conexion->query($sql);

    echo json_encode($query);
  
?>
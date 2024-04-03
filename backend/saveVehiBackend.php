<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true);
 $placa = $data['placa'];
 $marca = $data['marca'];
 $modelo = $data['modelo'];
 $nro = $data['nro'];
 $chofer = $data['chofer'];
 $sql = "INSERT INTO  vehiculos (placa,marca,modelo,nro,chofer) values('$placa' , '$marca' , '$modelo', '$nro', '$chofer') ";
    $query = $conexion->query($sql);

    echo json_encode($query);
   
?>
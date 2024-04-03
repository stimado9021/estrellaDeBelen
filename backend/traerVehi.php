<?php
require "bd/bd.php";

 $sql = "SELECT * FROM  vehiculos ";
    $query = $conexion->query($sql);
    
    $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $idChofer =  $r['chofer'];
        $sql2 = "SELECT nombre FROM  choferes where id='$idChofer' ";
        $query2 = $conexion->query($sql2);
         $res = $query2->fetch_assoc();
        
        $datos[] = [
            "id" => $r['id'],
        	"placa" => $r['placa'],
        	"marca" => $r['marca'], 
            "modelo" => $r['modelo'],
            "nro" => $r['nro'],
            "chofer" => $res['nombre'], 
        ];
    }
    echo json_encode($datos);
?>
<?php
require "bd/bd.php";
$json =  file_get_contents("php://input");
$data = json_decode($json, true);
$cedula  = $data['cedula'];

 $sql = "SELECT nombre FROM  clientes WHERE cedula = '$cedula' "  ;
    $query = $conexion->query($sql);
    
     $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $datos[] = [            
            "nombres" => $r['nombres'],  
            "apellidos" => $r['apellidos'],  
            "phone" => $r['phone'],        	
            "status" => $r['status'],        	            
        ];
    }
   
    echo json_encode($datos);
?>
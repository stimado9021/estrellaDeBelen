<?php
require "bd/bd.php";
$json =  file_get_contents("php://input");
$data = json_decode($json, true);
$busca  = $data['busca'];

 $sql = "SELECT nombre FROM  clientes WHERE nombre LIKE '$busca%' "  ;
    $query = $conexion->query($sql);
    
     $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $datos[] = [            
            "nombre" => $r['nombre'],        	
        ];
    }
   
    echo json_encode($datos);
?>
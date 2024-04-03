<?php
require "bd/bd.php";
$json =  file_get_contents("php://input");
$data = json_decode($json, true);
$fragmento  = $data['fragmento'];

 $sql = "SELECT id,fullName FROM  usuarios WHERE  fullName LIKE '$fragmento%'  "  ;
    $query = $conexion->query($sql);
    
     $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $datos[] = [            
            "id" => $r['id'],  
            "fullName" => $r['fullName'],                                	            
        ];
    }
   
    echo json_encode($datos);
?>
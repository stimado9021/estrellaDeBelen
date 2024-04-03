<?php
require "bd/bd.php";
$json =  file_get_contents("php://input");
$data = json_decode($json, true);
$id2  = $data['id2'];

 $sql = "SELECT * FROM  sede WHERE idSede LIKE '$id2' "  ;
    $query = $conexion->query($sql);
    
     $datos = array();
     
    while($r = $query->fetch_assoc()) {
        $datos[] = [                        
            "nombreSede"=>$r['nombreSede']       	
        ];
    }
   
    echo json_encode($datos);
?>
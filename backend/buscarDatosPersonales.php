<?php
require "bd/bd.php";
$json =  file_get_contents("php://input");
$data = json_decode($json, true);
$id  = $data['id'];

 $sql = "SELECT * FROM  usuarios WHERE id = '$id' "  ;
    $query = $conexion->query($sql);
    
     $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $datos[] = [            
            "id" => $r['id'],
        	"fullName" => $r['fullName'],        	
            "cedula" => $r['cedula'],
            "correo" => $r['correo'],
            "phone" => $r['phone'],
            'direccion'=>$r['direccion'], 
            'estado'=>$r['estado'], 
            'municipio'=>$r['municipio'], 
            'parroquia'=>$r['parroquia'], 
            'sector'=>$r['sector'], 
            "sede"=>$r['sede'],
            "status"=>$r['status']       	
        ];
    }
   
    echo json_encode($datos);
?>
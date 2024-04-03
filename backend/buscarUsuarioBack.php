<?php
require "bd/bd.php";
$json =  file_get_contents("php://input");
$data = json_decode($json, true);
$fullName  =$data['fullName'] ;

  $sql = "SELECT * FROM  usuarios WHERE fullName = '$fullName' "  ;
    $query = $conexion->query($sql);
    
     $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $datos[] = [            
            "id" => $r['id'],  
            "fullName" => $r['fullName'],               
            "cedula" => $r['cedula'],  
            "phone" => $r['phone'],        	
            "correo" => $r['correo'],        	            
            "direccion" => $r['direccion'],                     
        ];
    }
   
    echo json_encode($datos);
?>
<?php
require "bd/bd.php";
$json =  file_get_contents("php://input");
$data = json_decode($json, true);
$fechaInicio  =$data['fi'];
$fechaFin  = $data['ff'];

 $sql = "SELECT * FROM   usuarios u INNER JOIN asistencia a ON u.id=a.idUsuario WHERE RegistroVisita BETWEEN '$fechaInicio' AND  '$fechaFin' "  ;
    $query = $conexion->query($sql);
    
     $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $datos[] = [            
            "idUsuario" => $r['idUsuario'], 
            "fullName" => $r['fullName'],  
            "RegistroVisita" => $r['RegistroVisita'], 

        ];
    }
   
    echo json_encode($datos);
?>
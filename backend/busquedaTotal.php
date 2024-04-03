<?php
require "bd/bd.php";
$json =  file_get_contents("php://input");
$data = json_decode($json, true);
$paramSeach = $data['paramSeach'];
$buscarPor = $data['buscarPor'];

 $sql = "SELECT * FROM  datosextras d INNER JOIN usuarios u ON d.idUser = u.id WHERE $buscarPor LIKE '$paramSeach%' "  ;
    $query = $conexion->query($sql);
    
     $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $datos[] = [            
            "idUser" => $r['idUser'],
            "fullName" => $r['fullName'],
            "cedula" => $r['cedula'],
            "phone" => $r['phone'],
                   	
        ];
    }
   
    echo json_encode($datos);
?>
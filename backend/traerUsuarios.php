<?php
require_once "bd/bd.php";
$sql = "SELECT * FROM  usuarios";
    $query = $conexion->query($sql);
    
    $datos = [];
    
    while($r = $query->fetch_assoc()) {     
       
        $datos[] = [
            "id" => $r['id'],
        	"fullName" => $r['fullName'],        	
            "cedula" => $r['cedula'],
            "correo" => $r['correo'],
            "phone" => $r['phone'],
            "sede" => $r['sede'],
            "status" => $r['status']
        ];
    }
  //var_dump($datos)
  echo json_encode($datos)  ;


    ?>

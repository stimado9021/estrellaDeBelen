<?php
require_once "bd/bd.php";
$json =  file_get_contents("php://input");
$data = json_decode($json, true);
$id = $data['id'];
$sql = "SELECT * FROM   asistencia WHERE idUsuario = '$id' ";
    $query = $conexion->query($sql);
    
    $datos = [];
    
    while($r = $query->fetch_assoc()) {     
       
        $datos[] = [           
                "idAsi" => $r['idAsi'],
                "RegistroVisita" => $r['RegistroVisita']
         ];
    }
 
  echo json_encode($datos)  ;


    ?>

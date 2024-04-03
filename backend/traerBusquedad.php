<?php
require_once "bd/bd.php";
$json =  file_get_contents("php://input");
$data = json_decode($json, true);
$search = $data['search'];
$sql = "SELECT * FROM  $search";
    $query = $conexion->query($sql);
    
    $datos = [];
    
    while($r = $query->fetch_assoc()) {     
       
        $datos[] = [           
                $search => $r['".$search."']
         ];
    }
  //var_dump($datos)
  echo json_encode($datos)  ;


    ?>

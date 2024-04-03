<?php
require "bd/bd.php";
$json =  file_get_contents("php://input");
$data = json_decode($json, true);
$id  = $data['id'];

 $sql = "SELECT * FROM  datosextras WHERE idUser LIKE '$id' "  ;
    $query = $conexion->query($sql);
    
     $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $datos[] = [            
            "id" => $r['id'],
        	"estadoCivil" => $r['estadoCivil'],        	
            "nombrePareja" => $r['nombrePareja'],
            "profesion" => $r['profesion'],
            "genero" => $r['genero'],
            "fechaNacimiento"=>$r['fechaNacimiento'], 
            "tiempoVisita"=>$r['tiempoVisita'],
            "ministerio"=>$r['ministerio'],
            "bautizado"=>$r['bautizado'] ,  
            "responsabilida"=>$r['responsabilida'] ,  
            "nroHijos"=>$r['nroHijos']       	
        ];
    }
   
    echo json_encode($datos);
?>
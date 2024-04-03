<?php
require "bd/bd.php";

 $sql = "SELECT * FROM  Profesion ";
    $query = $conexion->query($sql);
    
    $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $datos[] = [
            "idProfe" => $r['idProfe'],
        	"Profesion" => $r['Profesion'],      	
        ];
    }
    echo json_encode($datos);
?>
<?php
require "bd/bd.php";

 $sql = "SELECT * FROM  sede";
    $query = $conexion->query($sql);
    
    $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $datos[] = [
            "idSede" => $r['idSede'],
        	"nombreSede" => $r['nombreSede']            
        ];
    }
    echo json_encode($datos);
?>
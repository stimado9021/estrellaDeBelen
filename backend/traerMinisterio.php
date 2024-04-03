<?php
require "bd/bd.php";

 $sql = "SELECT * FROM  ministerio";
    $query = $conexion->query($sql);
    
    $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $datos[] = [
            "idMini" => $r['idMini'],
        	"ministerio" => $r['ministerio']            
        ];
    }
    echo json_encode($datos);
?>
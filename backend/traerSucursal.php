<?php
require "bd/bd.php";

 $sql = "SELECT * FROM  statusrole";
    $query = $conexion->query($sql);
    
    $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $datos[] = [
            "id_sta" => $r['id_sta'],
        	"statusrole" => $r['statusrol']            
        ];
    }
    echo json_encode($datos);
?>
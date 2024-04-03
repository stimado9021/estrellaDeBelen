<?php
require "bd/bd.php";

 $sql = "SELECT * FROM  choferes ";
    $query = $conexion->query($sql);
    
    $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $datos[] = [
            "id" => $r['id'],
        	"nombre" => $r['nombre'],
        	"email" => $r['email'], 
            "licencia" => $r['licencia'], 
        ];
    }
    echo json_encode($datos);
?>
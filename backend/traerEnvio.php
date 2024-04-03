<?php
require "bd/bd.php";

 $sql = "SELECT * FROM  envios ";
    $query = $conexion->query($sql);
    
    $datos = array();
    
    while($r = $query->fetch_assoc()) {
        $datos[] = [
            "id" => $r['id'],
        	"numeroOrden" => $r['numeroOrden'],
            "usuario" => $r['usuario'],
        	"sucursalDestino" => $r['sucursalDestino'], 
            "remitente" => $r['remitente'], 
            "contactoRemi" => $r['contactoRemi'],
            "destinatario" => $r['destinatario'],
            "fecha_envio" => $r['fecha_envio'], 
            "importeEnvio" => $r['importeEnvio'], 
            "tipoServicio" => $r['tipoServicio'], 
            "tipoCarga" => $r['tipoCarga'], 
        ];
    }
    echo json_encode($datos);
?>
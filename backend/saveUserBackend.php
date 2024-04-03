<?php
require "bd/bd.php";
 //$json =  file_get_contents("php://input"); 
 $data = json_decode(file_get_contents("php://input"),true);
 $fullName = $data['fullName'];
 $cedula = $data['cedula'];
 $correo = $data['correo'];
 $phone = $data['phone'];
 $direccion = $data['direccion'];
 $sede='Principal';
 $status='visita';
 
//  $status = $data['status'];
 $sql = "INSERT INTO  usuarios (fullName,cedula,correo,phone,direccion,status,sede) values('$fullName','$cedula' , '$correo','$phone','$direccion','$status','$sede') ";
    $query = $conexion->query($sql);
    echo json_encode($query);

?>
<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true);
      $id = $data['id'];
      $fullName = $data['fullName'];
      $cedula = $data['cedula'];
      $phone = $data['phone'];
      $correo = $data['correo'];
      $direccion = $data['direccion'];
      $status = $data['status'];
      $estado = $data['estado'];
      $municipio = $data['municipio'];
      $parroquia = $data['parroquia'];
      $sector = $data['sector'];
      $sede = $data['sede'];

 
 $sql = "UPDATE usuarios SET fullName = '$fullName',cedula = '$cedula',phone = '$phone',correo = '$correo',direccion = '$direccion',status = '$status',estado='$estado',municipio='$municipio',parroquia='$parroquia',sector='$sector',sede = '$sede' where id='$id' ";
    $query = $conexion->query($sql);

    echo json_encode($query);
  
?>
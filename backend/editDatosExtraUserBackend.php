<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true);
      $idUser = $data['idUser'];
      $estadoCivil = $data['estadoCivil'];
      $nombrePareja = $data['nombrePareja'];
      $profesion = $data['profesion'];
      $genero = $data['genero'];
      $fechaNacimiento = $data['fNac'];
      $tiempoVisita = $data['tiempoVisita'];
      $ministerio = $data['ministerio'];
      $bauti = $data['bauti'];
      $respo = $data['respo'];
      $nhijos = $data['nhijos'];

 
 $sql = "UPDATE datosextras SET estadoCivil = '$estadoCivil' ,nombrePareja = '$nombrePareja', profesion  = '$profesion', genero = '$genero',fechaNacimiento = '$fechaNacimiento',tiempoVisita = '$tiempoVisita', ministerio  = '$ministerio', bautizado  = '$bauti', responsabilida  = '$respo',nroHijos  = '$nhijos' WHERE idUser='$idUser' ";
    $query = $conexion->query($sql);

    echo json_encode($data);
  // 
?>
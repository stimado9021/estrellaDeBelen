<?php
require "bd/bd.php";
 $json =  file_get_contents("php://input");
 $data = json_decode($json, true);
 $idUser =  $data['idUser'];
 $estadoCivil = $data['estadoCivil'];
 $nombrePareja = $data['nombrePareja'];
 $genero = $data['genero'];
 $profesion =$data['profesion'];
 $fechaNacimiento = $data['fNac'];
 $tiempoVisita =$data['tiempoVisita'];
 $ministerio = $data['ministerio'];
 $bauti = $data['bauti'];
 $respo = $data['respo'];
 $nHijos = $data['nhijos'];
 $sql = "INSERT INTO datosextras (idUser, estadoCivil,nombrePareja,genero,profesion,fechaNacimiento, 
                                    tiempoVisita,ministerio,bautizado,responsabilida,
                                     nroHijos) 
                                             values('$idUser','$estadoCivil','$nombrePareja','$genero',
                                                   '$profesion', '$fechaNacimiento', '$tiempoVisita',
                                                   '$ministerio','$bauti','$respo' ,'$nHijos') ";
                        $query = $conexion->query($sql);
                       
                        echo json_encode($query);
   
?>
                                 
 
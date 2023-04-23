<?php

  $conexion = mysqli_connect("localhost", "root", "", "viajes_donosti");
  if($conexion){
    echo 'conectado exitosamente';
}else{
    echo 'no se ha podido conectar';
}

?>
<?php

// Conexion a BD
  function conex()
  {
    $servername = "localhost";
    $username = "luminiso_membresias";
    $password = "3IbK^Fa541wp";
    $dbname = "luminiso_membresias_redmis";
    $mysqli = new mysqli($servername, $username, $password,$dbname);
    if($mysqli->connect_error){
      die("Connection failed: " . $mysqli->connect_error);
    }
    $mysqli->set_charset("utf8");
    return $mysqli;
  }


function getInfoMembresia($data){
  $mysqli   = conex();
  $result=mysqli_query($mysqli, "SELECT estatus, fecha_expiracion FROM Miembros WHERE email = '$data->email';");
  $row = mysqli_fetch_array($result);
  $fin=mysqli_num_rows($result);

  if($fin > 0 ){
    echo '{"estatus" : "'. $row["estatus"] .'",
           "vigencia" : "'. $row["fecha_expiracion"] .'"
          }';
  }else{
    echo '{"respuesta" : "error",
           "error" : true }';
  }
  }

?>
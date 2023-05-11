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
  
function updateEstatus($data){
  $mysqli   = conex();
  $sql    = "UPDATE Miembros SET estatus ='". $data->estatus . "' WHERE email ='". $data->email . "'";
  
  if($result = $mysqli->query($sql)) {
    echo '{
            "respuesta" : "Exito",
            "error" : false
          }';
  }else {
    echo '{
            "respuesta" : "Error",
            "error" : true
          }';
  }
}

?>
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


function getUsuarios($data){
  $mysqli   = conex();
  $result=mysqli_query($mysqli, "SELECT * FROM Miembros WHERE email = '$data->email' AND password = '$data->password';");
  $row = mysqli_fetch_array($result);
  $fin=mysqli_num_rows($result);

  if($fin > 0 ){
        if($row["tipo"] == "administrador")
            echo '{"respuesta" : "admin",
                   "error" : false }';
        else
            echo '{"respuesta" : "usuario",
                   "error" : false }';
  }else{
    echo '{"respuesta" : "error",
           "error" : true }';
  }
  }

?>
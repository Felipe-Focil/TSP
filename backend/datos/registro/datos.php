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


function insertUsuario($data){
    // echo $data;
  $mysqli   = conex();
  $sql    = " INSERT INTO Miembros SET nombre ='". $data->name . "', 
                                        apellidos ='" . $data->lastName . "', 
                                        linea_investigacion = " . $data->lineaInv . ", 
                                        tipo = 'usuario',
                                        universidad = " . $data->universidad . ", 
                                        estado =" . $data->estado . ", 
                                        pais =" . $data->pais . ",
                                        password ='". $data->password . "', 
                                        email ='". $data->email . "'";
              
  if($result = $mysqli->query($sql)) {
      echo '{
              "nombre" : "Exito",
              "apellido" : "Exito",
              "li" : "Exito",
              "uni" : "Exito",
              "estado" : "Exito",
              "pais" : "Exito",
              "pass" : "Exito",
              "email" : "Exito",
              "uni": "Exito"
            }';
    }else {
      echo '{
              "respuesta" : "Error",
              "error" : true
            }';
    }
  }

?>
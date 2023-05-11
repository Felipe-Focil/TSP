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


function getInfoSolicitud($data){
  $mysqli   = conex();
  $result=mysqli_query($mysqli, "SELECT M.nombre, M.apellidos, M.genero, M.email, M.password, M.imagen, M.cv, u.nombre_completo AS universidad, p.nombre AS pais, e.nombre AS estado, l.nombre AS linea_investigacion 
                                    FROM Miembros M 
                                    INNER JOIN Universidades u ON M.universidad = u.id 
                                    INNER JOIN Paises p ON M.pais = p.id 
                                    INNER JOIN Estados e ON M.estado = e.id 
                                    INNER JOIN LineasInvestigacion l ON M.linea_investigacion = l.id 
                                    WHERE M.nombre = '$data->nombre';");
  $row = mysqli_fetch_array($result);
  $fin=mysqli_num_rows($result);

  if($fin > 0 ){
    echo '{"nombre" : "'. $row["nombre"] .'",
           "apellidos" : "'. $row["apellidos"] .'",
           "genero" : "'. $row["genero"] .'",
           "email" : "'. $row["email"] .'",
           "universidad" : "'. $row["universidad"] .'",
           "estado" : "'. $row["estado"] .'",
           "lineaInv":"'. $row["linea_investigacion"].'",
           "pais" : "'. $row["pais"] .'"
           }';
  }else{
    echo '{"respuesta" : "error",
           "error" : true }';
  }
  }

?>
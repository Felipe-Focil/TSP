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


function getInfoUsuario($data){
  $mysqli   = conex();
  $result=mysqli_query($mysqli, "SELECT M.nombre, M.apellidos, M.genero, M.email, M.password, M.imagen, M.cv, u.nombre_completo AS universidad, p.nombre AS pais, e.nombre AS estado, l.nombre AS linea_investigacion 
                                    FROM Miembros M 
                                    INNER JOIN Universidades u ON M.universidad = u.id 
                                    INNER JOIN Paises p ON M.pais = p.id 
                                    INNER JOIN Estados e ON M.estado = e.id 
                                    INNER JOIN LineasInvestigacion l ON M.linea_investigacion = l.id 
                                    WHERE M.email = '$data->email';");
  $row = mysqli_fetch_array($result);
  $fin=mysqli_num_rows($result);

  if($fin > 0 ){
    echo '{"nombre" : "'. $row["nombre"] .'",
           "apellidos" : "'. $row["apellidos"] .'",
           "genero" : "'. $row["genero"] .'",
           "email" : "'. $row["email"] .'",
           "password" : "'. $row["password"] .'",
           "universidad" : "'. $row["universidad"] .'",
           "estado" : "'. $row["estado"] .'",
           "pais" : "'. $row["pais"] .'",
           "lineaInv" : "'. $row["linea_investigacion"] .'",
           "img" : "'. $row["imagen"] .'",
           "cv" : "'. $row["cv"] .'"
          }';
  }else{
    echo '{"respuesta" : "error",
           "error" : true }';
  }
  }
  
  function editUsuario($data){
  $mysqli   = conex();
  $sql    = "UPDATE Miembros SET nombre ='". $data->name . "', 
                                 apellidos ='". $data->lastName . "', 
                                 email ='". $data->email . "', 
                                 password ='". $data->password . "', 
                                 universidad ='". $data->universidad . "', 
                                 estado ='". $data->estado . "', 
                                 pais ='". $data->pais . "', 
                                 linea_investigacion ='". $data->lineaInv . "'
            WHERE email ='". $data->email . "'";
    

  if($result = $mysqli->query($sql)){
    echo '{
            "respuesta" : "Exito",
            "error" : false
          }';
  }else{
    echo '{"respuesta" : "error",
           "error" : true }';
  }
  }

?>
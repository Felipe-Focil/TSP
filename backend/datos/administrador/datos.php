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


function getDataAdmin(){
  $mysqli   = conex();
  $sql= "SELECT M.nombre, M.apellidos, M.tipo, M.email, u.nombre_completo AS universidad 
                                    FROM Miembros M 
                                    INNER JOIN Universidades u ON M.universidad = u.id
                                    WHERE M.estatus = 'Aceptado' ";
                                    
   
    
  if(!$resultado=$mysqli->query($sql)){
        echo '{
            "respuesta" : "Error",
            "error" : true
         }';
    }else {
        $arrayDatos=array();
        while($fila = $resultado->fetch_assoc()){
            echo'<tr>
                    <td>'.$fila["nombre"].' '.$fila["apellidos"].'</td>
                    <td>'.$fila["universidad"].'</td>
                    <td class="tdEmail">'.$fila["email"].'</td>
                    <td id="tdTipo">'.$fila["tipo"].'</td>
                    <td id="tdModif"></td>
                </tr>';
        }
        
    }
}

function insertAdmin($data){
  $mysqli   = conex();
  $sql    = " INSERT INTO Miembros SET nombre ='". $data->name . "', 
                                        apellidos ='" . $data->lastName . "', 
                                        linea_investigacion = 1, 
                                        universidad = 1, 
                                        estado = 9, 
                                        pais = 1,
                                        password ='". $data->password . "', 
                                        email ='". $data->email . "',
                                        fecha_inicio = '2023-05-05',
                                        fecha_expiracion ='2023-10-05'";
              
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

function addAdmin($data){
  $mysqli   = conex();
  $sql    = "UPDATE Miembros SET tipo ='administrador' WHERE email ='". $data->email . "'";
  
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
function delAdmin($data){
  $mysqli   = conex();
  $sql    = "UPDATE Miembros SET tipo ='usuario' WHERE email ='". $data->email . "'";
  
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
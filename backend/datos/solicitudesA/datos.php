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


function getSolicitudesAceptadas(){
    $mysqli   = conex();
    $result=mysqli_query($mysqli, "SELECT nombre FROM Miembros Where estatus = 'Aceptado'");
    $rows=mysqli_num_rows($result);
    
    while($row = mysqli_fetch_array($result))
    {
        
        echo "
            <div class='card shadow mb-4'>
                            <div class='card-header py-3'>
                                <h5 class='m-0 font-weight-bold text-primary'>".$row['nombre']."</h5>
                            </div>
                            <div class='card-body'>
                                <span>Ver Solicitud</span>
                            </div>
                        </div>
        ";
    }
}

?>
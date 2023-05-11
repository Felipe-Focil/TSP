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


function getSolicitudesPendientes(){
    $mysqli   = conex();
    $result=mysqli_query($mysqli, "SELECT * FROM Universidades");
    $result2=mysqli_query($mysqli, "SELECT * FROM Estados");
    $result3=mysqli_query($mysqli, "SELECT * FROM LineasInvestigacion");
    $result4=mysqli_query($mysqli, "SELECT * FROM Paises");
    $result5=mysqli_query($mysqli, "SELECT * FROM Membresias");
    $row = mysqli_fetch_array($result);
    $row2 = mysqli_fetch_array($result2);
    $row3 = mysqli_fetch_array($result3);
    $row4 = mysqli_fetch_array($result4);
    $row5 = mysqli_fetch_array($result5);
    
                                                    do
                                                    {
                                                        echo'<option value="'.$row4["id"].'">'.$row4["nombre"].'</option>';
                                                    }while($row4 = mysqli_fetch_array($result4));
        echo '
                                                </select>

                                            </div>
                                            <div class="col-md-7 mb-4 pb-2">

                                                <select class="form-select" aria-label="Default select example"
                                                    id="exampleSelectEstado" disabled>
                                                    <option selected>Estado</option>
        ';
                                                    do
                                                    {
                                                        echo'<option value="'.$row2["id"].'">'.$row2["nombre"].'</option>';
                                                    }while($row2 = mysqli_fetch_array($result2));
                                                    
        echo '
                                                </select>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 mb-4 pb-2">

                                                <select class="form-select" aria-label="Default select example"
                                                    id="exampleSelectUni" >
                                                    <option selected>Universidad</option>
        ';
                                                    do
                                                    {
                                                        echo'<option value="'.$row["id"].'">'.$row["nombre_completo"].'</option>';
                                                    }while($row = mysqli_fetch_array($result));                                          
        echo '
                                                </select>

                                            </div>
                                            <div class="col-md-7 mb-4 pb-2">

                                                <select class="form-select" aria-label="Default select example"
                                                    id="exampleSelectLineaInv">
                                                    <option selected>Linea de investigacion</option>
        ';
                                                    do
                                                    {
                                                        echo'<option value="'.$row3["id"].'">'.$row3["nombre"].'</option>';
                                                    }while($row3 = mysqli_fetch_array($result3));
        echo '
                                                </select>

                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <select class="form-select" aria-label="Default select example"
                                                id="exampleSelectMemb">
                                                <option selected>Tipo de membresia</option>
        ';
                                                do
                                                    {
                                                        echo'<option value="'.$row5["id"].'">'.$row5["nombre"].'</option>';
                                                    }while($row5 = mysqli_fetch_array($result5));
        echo '
                                            </select>
                                        </div>
                                        
        ';
}

function getEstados(){
    
}

?>
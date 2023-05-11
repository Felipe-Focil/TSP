<?php


function curl_api($url,$metodo,$datos){
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL             => $url,
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_ENCODING        => '',
    CURLOPT_MAXREDIRS       => 10,
    CURLOPT_TIMEOUT         => 0,
    CURLOPT_FOLLOWLOCATION  => true,
    CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST   => $metodo,
    CURLOPT_POSTFIELDS      => $datos,
  ));
  $response = curl_exec($curl);
  curl_close($curl);
  return $response;
}

$name = $_POST["name"];    
$lastName = $_POST["lastName"];    
$email = $_POST["email"];    
$password = $_POST["password"];
$universidad = $_POST["universidad"];
$lineaInv = $_POST["lineaInv"];
$pais = $_POST["pais"];
$estado = $_POST["estado"];


/* $target_dir = "./img/users/profilePhoto";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);

    // Seleccionar tipo de extension
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Validar extension
    $extensions_arr = array("jpg","jpeg","png");

    // Revisar extension
    if( in_array($imageFileType,$extensions_arr) ){ */ 

$data = array(
        "name" => $name,
        "lastName" => $lastName,
        "email" => $email,
        "password" => $password,
        "universidad" => $universidad,
        "lineaInv" => $lineaInv,
        "pais" => $pais,
        "estado" => $estado
        );
// var_dump($data);
/*    }else{
    echo '{
              "respuesta" : "Error",
              "error" : true
            }';
    }*/
        
// echo $data;
$data = json_encode($data);
$response = curl_api('https://luminisoft.com.mx/membresias/backend/servicio/registro/','POST',$data);
echo($response);

?>

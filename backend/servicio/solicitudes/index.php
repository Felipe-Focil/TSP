<?php
  /* Errores de PHP */

  $debug =  true;
  if(isset($debug))
  {
    if($debug)
    {
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1); 
      error_reporting(E_ALL); 
    }
  }
  
  /* Header Request */
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Methods: POST,GET,PATCH,DELETE");
  header("Access-Control-Max-Age: 3600");
  header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

  include '/home/luminiso/public_html/membresias/backend/datos/solicitudes/datos.php';  

  /* Código */

  if($_SERVER['REQUEST_METHOD'] == 'GET') 
  {
        $response = getSolicitudesPendientes();
  }

?>
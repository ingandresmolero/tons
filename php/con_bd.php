<?php

//iniciemos la conexion con la bdd, esta esta en otra pc con su nombre

$serverName = "192.168.1.113";
$connectionInfo = array( "Database"=>"innovaDB", "UID"=>"saint", "PWD"=>"nvd.3924306");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$row= array ();
if($conn){
  
}else{
    echo "  sigamos intentando <br /> ERROR: <br /> <br /> ";
    die( print_r( sqlsrv_errors(), true));
}

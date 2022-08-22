<?php

include("php/con_bd.php");

    $Busqueda="SELECT * from [innovaDB].[dbo].[Configurador] A";
    $Mostrar = sqlsrv_query($conn, $Busqueda);
    $i = 0;
    while ($row = sqlsrv_fetch_array($Mostrar)) {
        $FechaPred = $row['FechaPred'];
        $RegionPred = $row['RegionPred'];
        $LineaPred = $row['LineaPred'];
        $ClientePred = $row['ClientePred'];
        $StatusPred = $row ['StatusPred'];
                            $i++;
                        }


                        
if(isset($_POST['Guardar'])){

    $FechaDefault="2022-6-1";
    $RegionDefault=$_REQUEST['RegionPred'];
    $LineaDefault=$_REQUEST['LineaPred'];
    $ClienteDefault=$_REQUEST['ClientePred'];
    $StatusDefault=$_REQUEST['StatusPred'];

$Modificar ="UPDATE Configurador
SET [FechaPred] = '$FechaDefault'
   ,[RegionPred] = '$RegionDefault'
   ,[LineaPred] = '$LineaDefault'
   ,[ClientePred] = '$ClienteDefault'
   ,[StatusPred] = '$StatusDefault'
   ";

$Save= sqlsrv_query($conn, $Modificar);

if($Save ==true){
    echo '<script> alert ("Cambio Guardado")</script>';
}
}
?>
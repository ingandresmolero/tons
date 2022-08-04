<?php
include("php/con_bd.php");

if(isset($_POST['mostrar'])){
    

    // select T_H_ORDENESSERVICIO.NROORDENS, T_H_ORDENESSERVICIO.TIPOEQUIPO, T_H_ORDENESSERVICIO.FECHARECEPCION_SQL, T_H_ORDENESSERVICIO.DESCRIP, T_H_ORDENESSERVICIO.SITUACION, SAMECA.Descrip, SAMECA.REGION from T_H_ORDENESSERVICIO  INNER JOIN SAMECA  ON SAMECA.CodMeca = T_H_ORDENESSERVICIO.CODMECA


    // where T_H_ORDENESSERVICIO.FECHARECEPCION_SQL > '2022-1-1' and T_H_ORDENESSERVICIO.SITUACION= 'EN REVISION'


$Select="SELECT A.[CodMeca], A.[Descrip], B.[NROORDENS],B.[TIPOEQUIPO],B.[FECHARECEPCION_SQL],B.[LINEAEQUIPO],B.[SITUACION], A.[REGION]  FROM [innovaDB].[dbo].[SAMECA] A 
INNER JOIN [innovaDB].[dbo].[T_H_ORDENESSERVICIO] B 
    ON A.[CodMeca]=B.[CODMECA] WHERE FECHARECEPCION_SQL> '2022-1-1' AND SITUACION='EN REVISION'"
    ;

$Mostrar= sqlsrv_query($conn,$Select);
$i=0;
while($row = sqlsrv_fetch_array($Mostrar)){
    $Tecnico = $row['Descrip'];
    $Ods = $row['NROORDENS'];
    $Equipo = $row['TIPOEQUIPO'];
    $Fecha = $row['FECHARECEPCION_SQL'];
    $Linea = $row['LINEAEQUIPO'];
    $Situacion = $row['SITUACION'];
    $Region = $row['REGION'];

echo '
<tr align="center">
                <td>'.  $Ods  .'</td>
                <td>'.  $Tecnico  .'</td>
                <td>'.  $Equipo  .'</td>
                <td>'.  $Situacion  .'</td>
                <td>'.  $Fecha  .'</td>
                <td>'.  $Linea  .'</td>
                <td>'.  $Region  .'</td>
            </tr>
';

    $i++;
}
}
?>
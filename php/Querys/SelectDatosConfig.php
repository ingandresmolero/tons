<?php
include("php/con_bd.php");

if (isset($_POST['filtrado'])) {

    $Select = "SELECT A.[CodMeca], A.[Descrip], B.[NROORDENS],B.[TIPOEQUIPO],B.[FECHARECEPCION_SQL],B.[LINEAEQUIPO],B.[SITUACION], A.[REGION],B.[CODCLIE]
        FROM [innovaDB].[dbo].[SAMECA] A 
        INNER JOIN [innovaDB].[dbo].[T_H_ORDENESSERVICIO] B
        ON A.[CodMeca]=B.[CODMECA] 
        
        INNER JOIN [innovaDB].[dbo].[Configurador] C 

        ON    B.[FECHARECEPCION_SQL] > C.[FechaPred] AND A.[REGION] = C.[RegionPred] AND B.[TIPOORDEN]=C.[StatusPred] AND B.[CODCLIE]=C.[ClientePred]
       
   

         WHERE SITUACION='EN REVISION'  ORDER BY FECHARECEPCION_SQL DESC";

    $Mostrar = sqlsrv_query($conn, $Select);
    $i = 0;
    while ($row = sqlsrv_fetch_array($Mostrar)) {
        $Tecnico = $row['Descrip'];
        $Ods = $row['NROORDENS'];
        $Equipo = $row['TIPOEQUIPO'];
        $Fecha = $row['FECHARECEPCION_SQL'];
        $Linea = $row['LINEAEQUIPO'];
        $Situacion = $row['SITUACION'];
        $Region = $row['REGION'];
        $Cliente=$row['CODCLIE'];

        echo '
<tr align="center">
                <td>' .  $Ods  . '</td>
                <td>' .  $Tecnico  . '</td>
                <td>' .  $Equipo  . '</td>
                <td>' .  $Situacion  . '</td>
                <td>' .  $Fecha  . '</td>
                <td>' .  $Linea  . '</td>
                <td>' .  $Region  . '</td>
                <td>' .  $Cliente  . '</td>
            </tr>
';

        $i++;
    }
}

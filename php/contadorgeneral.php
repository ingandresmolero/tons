<?php
    include("con_bd.php");

    $Select = "SELECT A.[CodMeca], A.[Descrip], B.[NROORDENS],B.[TIPOEQUIPO],B.[FECHARECEPCION_SQL],B.[LINEAEQUIPO],B.[SITUACION], A.[REGION]  FROM [innovaDB].[dbo].[SAMECA] A 
    INNER JOIN [innovaDB].[dbo].[T_H_ORDENESSERVICIO] B 
        ON A.[CodMeca]=B.[CODMECA]  WHERE FECHARECEPCION_SQL> '2022-6-1' AND SITUACION='EN REVISION' and REGION='MARACAIBO' ORDER BY FECHARECEPCION_SQL DESC";
    
        $Mostrar = sqlsrv_query($conn, $Select);
        $i = 0;
        while ($row = sqlsrv_fetch_array($Mostrar)) {
            
    
            $i++;
        }
        echo 
        '
        <p>'.$i.'</p>
        '
    



?>
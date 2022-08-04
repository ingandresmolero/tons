<?php
    include("./php/con_bd.php");


if(isset($_POST['enviar'])){

        $ODS=$_POST['ODS'];



$Buscar="SELECT A.[CodMeca], A.[Descrip], B.[NROORDENS],B.[TIPOEQUIPO],B.[FECHARECEPCION_SQL],B.[LINEAEQUIPO],B.[SITUACION], A.[REGION]  FROM [innovaDB].[dbo].[SAMECA] A 
INNER JOIN [innovaDB].[dbo].[T_H_ORDENESSERVICIO] B 
    ON A.[CodMeca]=B.[CODMECA]
WHERE B.NROORDENS='$ODS'";


        
        $Busqueda= sqlsrv_query($conn,$Buscar);

        if (!$Busqueda) {
            die("Query to show fields from table failed");
           }
           
           while($row = sqlsrv_fetch_array($Busqueda))
           {
            $Tecnico = $row['Descrip'];
            $Ods = $row['NROORDENS'];
            $Equipo = $row['TIPOEQUIPO'];
            $Fecha = $row['FECHARECEPCION_SQL'];
            $Linea = $row['LINEAEQUIPO'];
            $Situacion = $row['SITUACION'];
            $Region = $row['REGION'];
            echo
            '<tr align="center">
            <td>'.  $Ods  .'</td>
            <td>'.  $Tecnico  .'</td>
            <td>'.  $Equipo  .'</td>
            <td>'.  $Situacion  .'</td>
            <td>'.  $Fecha  .'</td>
            <td>'.  $Linea  .'</td>
            <td>'.  $Region  .'</td>
        </tr>';
        
        }
        echo "</table>";
        sqlsrv_free_stmt($Busqueda);
        sqlsrv_close($conn);

    }

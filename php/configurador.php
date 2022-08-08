<?php



if(isset($_POST['Guardar'])){

    $FechaDefault=$_POST['Fecha'];
    $RegionDefault=$_REQUEST['Region'];
    $LineaDefault=$_REQUEST['Linea'];


    echo'<script> alert("Parametros Guardados!") </script>';
}else{
    echo'<script> alert("Bienvenidos Al Configurador!") </script>';
    
    
}


?>
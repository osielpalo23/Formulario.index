<?php

    include("conectar.php");

    $Curp=$_POST['Curp'];
    $Nombres=$_POST['Nombres'];
    $ap_paterno=$_POST['ap_paterno'];
    $ap_materno=$_POST['ap_materno'];
    $Celular=$_POST['Celular'];

    $query="INSERT INTO formulario(Curp, Nombres, ap_paterno, ap_materno, Celular) VALUES('$Curp','$Nombres','$ap_paterno','$ap_materno','$Celular')";
    $resultado = $conectar -> query($query);
    
        //if($resultado){
        //    echo "Inserción exitosa";
        //}
        //else{
        //    echo "Inserción fallida";
        //}

?>

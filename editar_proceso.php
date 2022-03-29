<?php

    include("conectar.php");

    $id=$_REQUEST['id'];
    $Curp=$_POST['Curp'];
    $Nombres=$_POST['Nombres'];
    $ap_paterno=$_POST['ap_paterno'];
    $ap_materno=$_POST['ap_materno'];
    $Celular=$_POST['Celular'];

    $query="UPDATE formulario SET Nombres='$Nombres',ap_paterno='$ap_paterno',ap_materno='$ap_materno',Curp='$Curp',Celular='$Celular' Where id='$id'";
    $resultado = $conectar -> query($query);
    
        if($resultado){
            header("Location: tabla.php");
        }
        else{
            echo "Inserción fallida";
        }

?>
<?php
include("conectar.php");
    $id=$_REQUEST["id"];
    $query="DELETE FROM formulario WHERE id='$id'";
    $resultado=$conectar->query($query);

    if($resultado){
        header("Location:tabla.php");
    }
    else{
        echo "No se borro";
    }
?>
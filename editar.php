<DOCTYPE html>
<html>
<head>
    <center><title>Formulario</title></center>
</head>
<body>
    <center>
        
            <?php
                $id=$_REQUEST['id'];

                include("conectar.php");

                $query="SELECT * FROM formulario WHERE id='$id'";
                $resultado = $conectar->query($query);
                $row= $resultado -> fetch_assoc()
            ?>
            
        <form action="editar_proceso.php?id=<?php echo $row ['id'];?>" method="POST">

            <input type="text" name="Nombres" placeholder="Ingresa tu nombre" value="<?php echo $row ['Nombres'];?>"/><br><br>
            <input type="text" name="ap_paterno" placeholder="Ingresa tu apellido paterno" value="<?php echo $row ['ap_paterno'];?>"/><br><br>
            <input type="text" name="ap_materno" placeholder="Ingresa tu apellido materno" value="<?php echo $row ['ap_materno'];?>"/><br><br>
            <input type="text" name="Curp" placeholder="Ingresa tu CURP" value="<?php echo $row ['Curp'];?>"/><br><br>
            <input type="number" name="Celular" placeholder="Ingresa tu celular" value="<?php echo $row ['Celular'];?>"/><br><br>
            <input type="submit" value="Enviar">
        </form>
    </center>





</body>
</html>
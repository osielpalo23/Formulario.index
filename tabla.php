<DOCTYPE html>
<html>
<head>
    <title>Tabla pedorra xd</title>

</head>
<body>
    <center>    
        <table border="2">
            <thead>
                <tr>
                    <th colspan="1"><a href="index.php">Añade.</a></th>
                    <th colspan="7">Lista de personas.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>Nombre (s)</td>
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                    <td>CURP</td>
                    <td>Celular</td>
                    <td colspan="2">Acciones</td>

                </tr>
            <?php
                include("conectar.php");

                $query="SELECT * FROM formulario";
                $resultado = $conectar->query($query);
                while($row= $resultado -> fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row ['id'];?></td>
                    <td><?php echo $row ['Nombres'];?></td>
                    <td><?php echo $row ['ap_paterno'];?></td>
                    <td><?php echo $row ['ap_materno'];?></td>
                    <td><?php echo $row ['Curp'];?></td>
                    <td><?php echo $row ['Celular'];?></td>
                    <td><a href="editar.php?id=<?php echo $row ['id'];?>" > Editar</a></td>
					<td><a href="borrar.php?id=<?php echo $row ['id'];?>" > Borrar</a></td>
                </tr>
                
            <?php
                }
            ?>
                
            </tbody>

        </table>
    </center>
</body>
</html>
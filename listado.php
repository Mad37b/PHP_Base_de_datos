<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>listado</title>
</head>
<body>

<div class="titulo"> <h1>Listado de productos</h1></div>
<div class="contenedor-tabla-padre">
    <div class="contenedor-tabla-hijo">
        <?php

        require "conexion.php";
        
        ?>
        <!-- boton para hacer un insert into -->
        <form action="crear.php" method="POST">
            <input type="submit" value="Insertar Producto">
        </form>
        <!-- tabla para hacer la query -->

        <?php 

        $Nombre ="Nombre";
        $Codigo = "Codigo";
        $Detalles="Descripcion";
        $Precio = "Precio";


        $query="Select " . $Nombre ."," .$Codigo.",".$Precio.",".$Detalles." FROM listaProductos";
       
        $resultado= $conexion->query($query)?>
        <table class="tabla-listado" style=" border:2px solid black; border-radius:8px">
        <tr>
    <?php if($resultado){?>
            <td>Detalles</td>
            <td>Codigo</td>
            <td>Nombre</td>
            <td>Acciones</td>
            <?php }else{

die($conexion->connect_error);
            }
            // Liberar el resultado


// Cerrar la conexión
?>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><form action="detalles.php">

            <input type="hidden" name="Codigo" value= "<?php echo $row['Codigo'] ?>">
            <input type="hidden" name="Nombre" value= "<?php echo $row['Nombre'] ?>">
            <input type="hidden" name="Precio" value= "<?php echo $row['Precio']?>">
            <input type="hidden" name="Descripcion" value= "<?php echo $row['Descripcion'] ?>">
            <input type="submit" value="Detalles">
            </form></td>
            <td><?php echo $row['Codigo']?></td>
            <td><?php echo $row['Nombre']?></td>
        
            <td>
             
                <form action="actualizar.php" method="POST">
                    <input type="hidden" name="Nombre" value="<?php echo $row['Nombre']?>">
                    <input type="submit" value="Actualizar">
                    
                </form>
             
                <form action="borrar.php" method="POST">
                    <input type="hidden" name="Nombre" value="<?php echo $row['Nombre']?>">
                    <input type="submit" value="Borrar">
                </form>
            
        </td>
        <?php }?>
        </tr>

        </table>

      

    </div>
</div>
<?php

$resultado->free();


$conexion->close();

 ?>
</body>
</html>
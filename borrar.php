<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>borrar</title>
</head>
<body>

<div class="titulo"> <h1>Listado de productos Borrados</h1>
<div class="contenedor-tabla-padre">

    <div class="contenedor-tabla-hijo">
    <?php echo " ¿Seguro que quieres borrar este producto ? " ?>
    <?php $validar=true;
    
   
    ?>

        <?php 
            require "conexion.php";
        
        if(isset($_POST['Nombre'])){
         
            $nombreBorrado = $_POST['Nombre'];
            echo " El producto recibido a borrar a sido ".$nombreBorrado."<br><br>";
            $queryDelete = "Delete FROM listaProductos Where Nombre= '$nombreBorrado'";

            if ($conexion->query($queryDelete)) {
                echo "El producto". $nombreBorrado. " ha sido Borrado correctamente.";
            } else {
                echo "Error al borrar el producto: " . $conexion->error;
            }
            

        }
        
        ?>
   
    </div>
        </div>
            </div>

        <h2>Depuracion</h2>
        <?php echo var_dump($queryDelete)."<br><br>";
        echo var_dump($nombreBorrado); ?>

            <a href="listado.php"><button >Volver al listado</button></a>
</body>
</html>
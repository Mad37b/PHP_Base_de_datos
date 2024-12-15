<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Actualizar</title>
</head>
<body>
<?php

require "conexion.php";
/**
 * Creamos las variables 
 */
$conn=$conexion;
$nuevoNombre=$_POST['nuevoNombre'];
$updateQuery="";
$nombreAnterior="";

?>
<!-- Recibimos el nombreAnterior-->
<div class="titulo"> 
    <h1>Listado de productos Actualizados</h1></div>
<?php  ?>
<div class="contenedor-tabla-padree">
    <div class="contenedor-tabla-hijoo">


<!-- Rellenar el formulario para hacer el post de actualizar para que se rellene los datos -->
 <!-- Queda acabar el envio del post nuevo nombre a la casilla de text cuando se envia -->

<?php

if(isset($_POST['Nombre'])){
    $nombreAnterior = $_POST['Nombre'];
    echo "El nombre que deseas cambiar es " . $nombreAnterior."<br><br>";
    echo " Inserta el nuevo nombre";

   if(isset($_POST['nuevoNombre'])){


    $updateQuery="UPDATE listaProductos SET Nombre='$nuevoNombre'WHERE Nombre ='$nombreAnterior'"; 

    if ($conexion->query($updateQuery)) {
        echo "<br><br> El producto ".$nuevoNombre ." ha sido actualizado por ".$nombreAnterior." correctamente.";
    } else {
        echo "Error al actualizar el producto: " . $conexion->error;
    }
    

   }
?>

<?php 
?>

<?php } ?>


<form action="actualizar.php" method="POST">
    <label>Nuevo nombre</label>
    <input type="text" name="nuevoNombre" placeholder="inserta el nuevo nombre">
    <input type="hidden" name="Nombre" value="<?php echo $nuevoNombre; ?>">
    <input type="hidden" name="Nombre" value="<?php echo $nombreAnterior; ?>">
    <input type="submit" value="actualizar">
</form>
<h2>Depuracion</h2>
<?php

echo "<br><br>el valor del nuevo valor ha sido :". var_dump($nuevoNombre);
echo"<br><br> verifico la consulta final:". var_dump($updateQuery);   ?>

</div>

</body>
</html>
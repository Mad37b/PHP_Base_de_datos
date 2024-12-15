
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Insertar Producto</title>
</head>
<body>
<h1>Insertar Producto</h1>

<?php 

require "conexion.php";

$estado=$conexion;
$añadirNombre="";

$filaInsertada = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $añadirNombre = $_POST['nombre'];
    $insert = "INSERT INTO listaProductos (Nombre) VALUE('$añadirNombre')"; 
    if($estado->query($insert) ===TRUE){
    echo "Nuevo Registro insertado correctamente";

    }else{

        echo "ha habido un error en la insercción"+ $estado->error;
    }
}
$estado->close();
?>


<form action="crear.php" method="POST">
<label for="nombre">Nombre del producto</label><br><br>
<input type="text" name="nombre" placeholder="introduce el valor deseado">
<input type="submit" value="enviar">


</form>

<!--  Insert into -->



<!--  Insertar productos por un formulario ?  -->

</body>
</html>




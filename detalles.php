<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="style.css">
    <title>Detalles</title>
</head>
<body>
    <div class="titulo"> 
        <h1>Detalles del producto</h1>
    </div>

    <?php 
    $Detalles="";
    $Nombre="";
    $Codigo="";
    $Precio=0.00;
    $queryDetalles="";?>

    <div class="contenedor-padre">
    <?php require "conexion.php"; ?>
    <div class="contenedor-hijo">
        <div class="contenedor-detalles">
        <?php  if(isset($_GET['Nombre'])){
        $Nombre =$_GET['Nombre'];
        $Codigo =$_GET['Codigo'];
        $Precio =$_GET['Precio'];
        $Detalles =$_GET['Descripcion'];
            echo $Nombre ?>
            <div class=sub-contenedor-detalles>
    <?php 
    

//Verifica si ha sido enviado el nombre desde listado 

        
        echo " He recibido este nombre:". $Nombre ."<br>";
        echo " He recibido este codigo:". $Codigo."<br>";
        echo " He recibido este Precio:". $Precio ."<br>";
        echo " He recibido esta Descripción:". $Detalles."<br>";
   
    }else{ echo " no se ha recibido un nombre todavia";}



    
    ?>


                </div>
            </div>
        </div>
    </div>
    <a href="listado.php"><button >Volver al listado</button></a>
</body>
</html>
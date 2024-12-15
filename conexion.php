

<?php

$host = "127.0.0.1:3308";

$usuario = "root";

$password = "";

$BD = "productos";

$conexion  = mysqli_connect($host,$usuario,$password,$BD);
print $conexion ->server_info;

if (!$conexion){

    die("Conexion fallida: " . mysqli_connect_error());
    
}else{

    echo"<h1>Se ha establecido conexion</h1>";
  
}

?>
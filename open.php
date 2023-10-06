<?php
    $conexion = new mysqli("localhost","root","","historietas");
    if($conexion){
        echo "conexion exitosa";
    }else{
        echo "fallo la conexion";
    }

?>
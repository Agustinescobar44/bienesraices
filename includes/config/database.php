<?php 


function conectarDB() : mysqli{
     $db = mysqli_connect('localhost' , 'root' , 'lautaro9', 'bienes_raices');

     if(!$db){
        echo "no se pudo conectar";
        exit;
     }
    return $db;
}


?>
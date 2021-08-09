<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "aeropuerto");

$conexion = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
// Verificamos que haga la conexion
if($conexion){
    echo ("Conexión Exitosa");

}else{
    echo("Conexion Denegada");
}

?>
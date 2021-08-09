<?php

//Llamamos a la conexion ya establecida
require "conexion.php";

//Indicar de que se inicializa una sesión
session_start();
//Crear variables
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

// Creamos una variable para ser la consulta, "Traer nuestros datos "email y contraseña""
$q = "SELECT COUNT(*) as contar FROM usuarios WHERE email = '$email' AND contraseña = '$contraseña'";

// Toma las consultas de "Q" llamamos la conexión
$consulta = mysqli_query($conexion,$q);

// Transformar en forma de array los datos guardados en la base de datos
$array = mysqli_fetch_array($consulta);

// Contara todos los datos guardados en el parametro array. "Contar los datos en nuestra tabla de Usuarios de la Bd"
if($array['contar']>0){
    echo "<script> alert('Bienvenido');
    location.href = 'Logistica.php';
    </script>";
    }else{
        echo "<script> alert('Error Vuelve a iniciar sesion o registrate');
        location.href = 'register.php';
        </script>";
    
    }

?>
<?php
require 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$email =  $_POST['email'];
$cargo = $_POST['cargo'];
$genero = $_POST['genero'];
$contraseña = $_POST['contraseña'];

//aqui vamos a insertar datos
$insertar = "INSERT INTO usuarios(nombre,apellidos,usuario,email,cargo,genero,contraseña) VALUES
('$nombre','$apellido','$usuario','$email','$cargo','$genero','$contraseña')";

//Recorrer datos ya registrados y conectar a la base de datos
$query = mysqli_query($conexion, $insertar);

//Verificar si se guardaron los datos
if($query){
    echo"<script> alert('Registro Completado');
    location.href = 'login.php';
   </script>";
} else {
    echo "<script> alert('Usuario no registrado');
    location.href = 'register.php';
   </script>";
}

?>
<?php
require 'conexion.php';

$Operador = $_POST['Operador'];
$SubOP = $_POST['SubOP'];
$Matricula = $_POST['Matricula'];
$Empresa =  $_POST['Empresa'];
$Precio =$_POST['Precio'];
$Origen = $_POST['Origen'];
$Destino = $_POST['Destino'];
$FechaSalida = $_POST['FechaSalida'];
$FechaLlegada = $_POST['FechaLlegada'];
$Hora = $_POST['Hora'];
$Horario = $_POST['Horario'];
$TipoVuelo = $_POST['TipoVuelo'];
$ModoVuelo = $_POST['ModoVuelo'];

//aqui vamos a insertar datos
$insertar = "INSERT INTO Vuelos(Operador,SubOP,Matricula,Empresa,Precio,Origen,Destino,FechaSalida,FechaLlegada,Hora,Horario,TipoVuelo,ModoVuelo) VALUES
('$Operador','$SubOP','$Matricula','$Empresa','$Precio','$Origen','$Destino','$FechaSalida','$FechaLlegada','$Hora','$Horario','$TipoVuelo','$ModoVuelo')";

//Recorrer datos ya registrados y conectar a la base de datos
$query = mysqli_query($conexion, $insertar);

//Verificar si se guardaron los datos

if($query){
    echo"<script> alert('Registro De Vuelo Completado');
    location.href = 'index-pagos.php';
   </script>";
} else {
    echo "<script> alert('Vuelo no registrado - vuelve a intentarlo');
    location.href = 'Formulario_Vuelos.php';
   </script>";
}

?>
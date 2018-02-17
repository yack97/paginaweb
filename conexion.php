<?php 

//CONEXIÓN A LA BASE DE DATOS
$hostname_db = "localhost";
$database_db = "inicio_estructura";
$username_db = "root";
$password_db = "";
//Conectar a la base de datos
$conexion = mysqli_connect($hostname_db, $username_db, $password_db);
//Seleccionar la base de datos
mysqli_select_db($conexion,$database_db) or die ("Ninguna DB seleccionada");

include('inc/funciones.php');
?>
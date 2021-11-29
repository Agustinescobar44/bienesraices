<?php 

// Importar la conexion
require 'includes/app.php';
$db = conectarDB();

// Crear email y password
$email = '"correo@correro.com"';
$password= '123456';

$passwordHash ='"' .password_hash($password, PASSWORD_DEFAULT).'"';


// Query para crear el usua'io
$query = "INSERT INTO usuarios (email , password) 
VALUES ( ${email} , $passwordHash);"; 

// Agregarlo a la base de datos
$resultado =  mysqli_query($db , $query);


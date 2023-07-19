<?php

$servidor = "localhost";
$usuario  = "root";
$password = "1234";
$database = "paginadiicc";

// // Crear conexión
$conexion = mysqli_connect($servidor, $usuario, $password, $database);


// if (!mysqli_set_charset($conn, "utf8mb4")) {
//         printf("Error loading character set utf8mb4: %s\n", mysqli_error($conn));
//         exit();
//     }

if ($conexion->connect_error) {
        die("Conexión fallida: ".$conexion->connect_error);
     }

?>


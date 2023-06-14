<?php

shell_exec("ssh -f -L 127.0.0.1:3307:127.0.0.1:3306 diicc@10.17.17.35 sleep 60 >> /var/www/carlos/https://paginadiicc.uda.cl/logfile"); 
$servidor = "127.0.0.1";
$usuario  = "root";
$password = "1234";
$database = "paginadiicc";

// // Crear conexión
$conexion = mysqli_connect($servidor, $usuario, $password, $database, 3306);


// if (!mysqli_set_charset($conn, "utf8mb4")) {
//         printf("Error loading character set utf8mb4: %s\n", mysqli_error($conn));
//         exit();
//     }

if ($conexion->connect_error) {
        die("Conexión fallida: ".$conexion->connect_error);
     }

?>


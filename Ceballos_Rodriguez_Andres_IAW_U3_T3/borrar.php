<?php

//CREATING THE CONNECTION
$connection = new mysqli("192.168.1.61", "root", "Admin2015", "tf",3316);
$connection->set_charset("uft8");
//TESTING IF THE CONNECTION WAS RIGHT
if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $connection->connect_error);
    exit();
}

var_dump($_GET['IdReparacion']);

//MAKING A SELECT QUERY
/* Consultas de selección que devuelven un conjunto de resultados */
  $query="DELETE FROM reparaciones WHERE IdReparacion ='".$_GET['IdReparacion']."'";


   if ($connection->query($query)) {

     header('Location: reparaciones.php')

     } else {
       echo "ha habido un fallo";
     }

 ?>

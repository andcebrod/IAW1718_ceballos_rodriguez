<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de vehiculos</title>
  </head>
  <body>
    <?php

      //CREATING THE CONNECTION
      $connection = new mysqli("192.168.1.61", "root", "Admin2015", "tf",3316);
      $connection->set_charset("uft8");

      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
        $query="INSERT into vehiculos (Matricula, Marca, Modelo, Color, FechaMatriculacion, CodCliente)
        VALUES ('".$_POST['Matricula']."','".$_POST['Marca']."','".$_POST['Modelo']."','".$_POST['Color']."','".$_POST['FechaMatriculacion']."','".$_POST['CodCliente']."')";
        echo $query;

      if ($result = $connection->query($query)) {

          echo "<h2>COCHE INSERTADO<h2>";

        } else {
          echo "<h1>Error al insertar</h1>";
        }
      ?>




  </body>
</html>

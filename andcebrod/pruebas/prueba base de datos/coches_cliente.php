<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Coches del Cliente</title>
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
        $query="SELECT * from vehiculos where CodCliente=$_GET['CodCliente']";
      if ($result = $connection->query($query)) {

          printf("<p>The select query returned %d rows.</p>", $result->num_rows);

      ?>

          <!-- PRINT THE TABLE AND THE HEADER -->
          <table style="border:1px solid black">
          <thead>
            <tr>
              <th>Matricula</th>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Color</th>
              <th>FechaMatriculacion</th>
          </thead>

      <?php

          //FETCHING OBJECTS FROM THE RESULT SET
          //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
          while($obj = $result->fetch_object()) {
              //PRINTING EACH ROW
              echo "<tr>";
                echo "<td>".$obj->Matricula."</td>";
                echo "<td>".$obj->Marca."</td>";
                echo "<td>".$obj->Modelo."</td>";
                echo "<td>".$obj->Color."</td>";
                echo "<td>".$obj->FechaMatriculacion."</td>";
              echo "</tr>";
          }

          //Free the result. Avoid High Memory Usages
          $result->close();
          unset($obj);
          unset($connection);

      } //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

    ?>

  </body>
</html>

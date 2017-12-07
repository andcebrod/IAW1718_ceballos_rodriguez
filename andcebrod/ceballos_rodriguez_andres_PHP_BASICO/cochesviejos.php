<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Coche Viejos</title>
  </head>
  <body>
    <?php       //CREATING THE CONNECTION
    $connection = new mysqli("192.168.1.61", "root", "Admin2015", "tf", 3316);
    $connection->set_charset("uft8");
   ?>
    <?php if (!isset($_POST["KM"])) : ?>

    <form action="cochesviejos.php" method="post">
      <p><input type="number" name="KM" value=""></p>
      <input type="submit" name="submit" value="BUSCAR">
    </form>
    <?php else: ?>
    <?php
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
        $query="SELECT * FROM vehiculos v join reparaciones r
        on v.matricula = r.matricula where r.Km >".$_POST['KM']." group by v.matricula";
      if ($result = $connection->query($query)) {
      }
      ?>
      <table>
        <thead>
          <th>Matricula</th>
          <th>Marca</th>
          <th>Modelo</th>
          <th>Color</th>
          <th>Fecha Matriculacion</th>
          <th>CodCliente</th>
          <th>Km</th>
        </thead>
        <?php

        while($obj = $result->fetch_object()) {
          // VARIABLES PARA NO CONCATENAR
          $matricula = $obj->Matricula;
          $marca = $obj->Marca;
          $modelo = $obj->Modelo;
          $color = $obj->Color;
          $fecha = $obj->FechaMatriculacion;
          $codcli = $obj->CodCliente;
          $km = $obj->Km;

            //PRINTING EACH ROW
            echo "<tr>";
              echo "<td>".$matricula."</td>";
              echo "<td>".$marca."</td>";
              echo "<td>".$modelo."</td>";
              echo "<td>".$color."</td>";
              echo "<td>".$fecha."</td>";
              echo "<td>".$codcli."</td>";
              echo "<td>".$km."</td>";
            echo "</tr>";
        }
        $result->close();
        unset($obj);
        unset($connection);

         ?>


      </table>

<?php endif ?>
  </body>
</html>

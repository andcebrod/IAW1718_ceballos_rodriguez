<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: Passing info using POST and HTML forms
                 using the same file
    Date: November 2015
    Reference: http://www.w3schools.com/tags/tag_form.asp
               http://www.w3schools.com/tags/tag_input.asp
               http://php.net/manual/reserved.variables.post.php
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing info with POST and HTML FORMS using a single file.</title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>

      <!-- PHP STRUCTURE FOR CONDITIONAL HTML -->
      <!-- FIRST TIME. NO DATA IN THE POST (checking a required form field) -->
      <!-- So we must show the form -->


<?php
//CREATING THE CONNECTION
  $connection = new mysqli("192.168.1.61", "root", "Admin2015", "tf",3316);
  $connection->set_charset("uft8");


  //TESTING IF THE CONNECTION WAS RIGHT
  if ($connection->connect_errno) {
      printf("Connection failed: %s\n", $connection->connect_error);
      exit();
  }
?>


      <?php if (!isset($_POST["matricula"])) : ?>
        <form method="post">
          <fieldset>
            <legend>Información del coche</legend>
            <span>Matricula:</span><input type="text" name="matricula" required><br>
            <span>Marca:</span><input type="text" name="marca" required><br>
            <span>Modelo:</span><input type="text" name="modelo" required><br>
            <span>Color:</span><input type="text" name="color" required><br>
            <span>Fecha de Matriculación:</span><input type="date" name="fechamatriculacion"><br>

            <?php


            $query1="SELECT DNI,CodCliente,Nombre,Apellidos from clientes order by Apellidos";
          if ($result = $connection->query($query1)) {

            echo "<span>Propietario: </span><select name='codcliente'>";
              while ($obj = $result->fetch_object()) {
                  //PRINTING EACH ROW
                  echo "<option value='".$obj->CodCliente."'>".$obj->Apellidos.", ".$obj->Nombre.", ".$obj->DNI."</option>";
              }   echo "</select><br>";

          } else {
            echo "No se ha recuperado los datos del cliente";
          }

            ?>

            <p><input type="submit" value="Insertar"></p>
          </fieldset>
        </form>

      <!-- DATA IN $_POST['mail']. Coming from a form submit -->

      <?php else: ?>

        <?php

        $matricula = $_POST["matricula"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $color = $_POST["color"];
        $fecha = $_POST["fechamatriculacion"];
        $codcli = $_POST["codcliente"];

        $query = "INSERT INTO vehiculos (Matricula,Marca,Modelo,Color,FechaMatriculacion,CodCliente)
        VALUES ('$matricula','$marca','$modelo','$color','$fecha','$codcli')";


        if ($connection->query($query)) {

          echo "COCHE INSERTADO";

          $query3 ="SELECT * FROM vehiculos";

          if ($result = $connection->query($query3)) {
            echo "<table>";

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
                  echo "<td>".$obj->CodCliente."</td>";
                echo "</tr>";
            }
            echo "</table>";
          }

         else {
          echo "ERROR AL INSERTAR COCHE";
        }
      }

        ?>

      <?php endif ?>

  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Insertar Vehiculos</title>

  </head>
  <body>

<?php if (!isset($_POST["matricula"])) : ?>
<form action="lista_vehiculos.php" method="post">
<fieldset>

  <span>Matricula: <input type="text" name="Matricula" value="" required></span><br>
  <span>Marca: <input type="text" name="Marca" value=""></span><br>
  <span>Modelo: <input type="text" name="Modelo" value=""></span><br>
  <span>Color: <input type="text" name="Color" value=""></span><br>
  <span>Fecha de Matriculación: <input type="date" name="FechaMatriculacion" value=""></span><br>

  <?php

  //CREATING THE CONNECTION
  $connection = new mysqli("192.168.1.61", "root", "Admin2015", "tf", 3316);
  $connection->set_charset("uft8");

  //TESTING IF THE CONNECTION WAS RIGHT

  if ($connection->connect_errno) {
      printf("Connection failed: %s\n", $connection->connect_error);
      exit();
  }

      $query="SELECT CodCliente,Nombre,Apellidos from clientes";
    if ($result = $connection->query($query)) {

    }
      echo "<span>Propietario: </span><select name=CodCliente>";
        while ($obj = $result->fetch_object()) {
            //PRINTING EACH ROW
            echo "<option value='".$obj->CodCliente."'>".$obj->Nombre.", ".$obj->Apellidos."</option>";
        }
      echo "</select><br>";
   ?>

<span><input type="submit" name="submit" value="Submit"></span><br>

</fieldset>
</form>

  </body>
</html>

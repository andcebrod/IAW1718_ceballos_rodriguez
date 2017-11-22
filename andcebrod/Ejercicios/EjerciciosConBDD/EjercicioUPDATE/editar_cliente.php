<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar cliente</title>
  </head>
  <body>

    <?php
    //CREATING THE CONNECTION
      $connection = new mysqli("192.168.1.167", "root", "Admin2015", "tf", 3316);
      $connection->set_charset("uft8");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
    ?>

    <?php if (!isset($_GET["CodCliente"])) ?>

    <form method="post">
      <fieldset>

        <?php

        echo "<span><input type='hidden' name='CodCliente' value='".$_GET['CodCliente']."'></span>";
        echo "<span>DNI: <input type='text' name='DNI' value='".$_GET['DNI']."'></span>";
        echo "<span>Nombre: <input type='text' name='Nombre' value='".$_GET['Nombre']."'></span>";
        echo "<span>Apellidos: <input type='text' name='Apellidos' value='".$_GET['Apellidos']."'></span>";
        echo "<span>Direccion: <input type='text' name='Direccion' value='".$_GET['Direccion']."'></span>";
        echo "<span>Teléfono: <input type='text' name='Telefono' value='".$_GET['Telefono']."'></span>";
        echo "<span><input type='submit' name='submit' value='submit'></span>";
         ?>


    <?php if (isset($_POST["CodCliente"])) ?>

<?php $query="UPDATE clientes SET DNI='".$_POST['DNI']."', nombre='".$_POST['Nombre']."', apellidos='".$_POST['Apellidos']."', Direccion='".$_POST['direccion']."', Telefono='".$_POST['telefono']."' WHERE CodCliente='".$_POST['CodCliente']."'"; ?>


 <?php else: ?>
   <span>No se ha recogido informacion</span>

   <?php else: ?>
     <span>No se ha encontrado informacion</span>

      </fieldset>

    </form>
  </body>
</html>

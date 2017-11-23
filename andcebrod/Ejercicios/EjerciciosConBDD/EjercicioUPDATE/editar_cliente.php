<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar cliente</title>
  </head>
  <body>

    <?php
    if (empty($_GET["CodCliente"])) {
      echo "No se han recibido datos del cliente";
      exit();
    }

     ?>

    <?php
    //CREATING THE CONNECTION
      $connection = new mysqli("192.168.1.61", "root", "Admin2015", "tf", 3316);
      $connection->set_charset("uft8");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
    ?>

    <?php if (!isset($_POST["DNI"])) : ?>

    <form method="post">
      <fieldset>

        <?php

        echo "<span><input type='hidden' name='CodCliente' value='".$_GET['CodCliente']."'></span><br>";
        echo "<span>DNI: <input type='text' name='DNI' value='".$_GET['DNI']."' required></span><br>";
        echo "<span>Nombre: <input type='text' name='Nombre' value='".$_GET['Nombre']."'></span><br>";
        echo "<span>Apellidos: <input type='text' name='Apellidos' value='".$_GET['Apellidos']."'></span><br>";
        echo "<span>Direccion: <input type='text' name='Direccion' value='".$_GET['Direccion']."'></span><br>";
        echo "<span>Teléfono: <input type='text' name='Telefono' value='".$_GET['Telefono']."'></span><br>";
        echo "<span><input type='submit' name='submit' value='submit'></span><br>";

         ?>
       </fieldset>

     </form>
    <?php else: ?>

        <?php $query="UPDATE clientes SET
        DNI='".$_POST['DNI']."',
        Nombre='".$_POST['Nombre']."',
        Apellidos='".$_POST['Apellidos']."',
        Direccion='".$_POST['Direccion']."',
        Telefono='".$_POST['Telefono']."'
        WHERE CodCliente='".$_POST['CodCliente']."'"; ?>

        <?php endif ?>

  </body>
</html>

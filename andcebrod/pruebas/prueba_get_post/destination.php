<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Destination</title>
  </head>
  <body>

    <?php

    if (empty($_GET)) {
      echo "No se ha enviado nada";
    } else {

      echo "Nombre: ".$_GET['nombre']."<br>";
      echo "Apellidos: ".$_GET['apellidos']."<br>";
      echo "Edad: ".$_GET['edad'];
    }




     ?>


  </body>
</html>

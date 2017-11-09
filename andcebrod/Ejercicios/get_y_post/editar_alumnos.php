<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Editar Alumnos </title>
  </head>
  <body>

    <form method="post">
      <fieldset>
        <?php if (!isset($_POST['email'])) : ?>

        <?php
        echo "<p>Nombre: <input type='text' name='nombre' value='".$_GET['nombre']."'></p>";
        echo "<p> Apellidos: <input type='text' name='apellidos' value='".$_GET['apellidos']."'></p>";
        echo "<p> Email: <input type='text' name='email' value='".$_GET['email']."'></p>";
        echo "<p><input type='submit' name='enviar' value='Enviar'><p>";
         ?>

       <?php else: ?>

         <?php

         echo "<p>Nuevos Datos: ".$_POST['nombre']."</p>";
         echo "<p>Nuevos Datos: ".$_POST['apellidos']."</p>";
         echo "<p>Nuevos Datos: ".$_POST['email']."</p>";


          ?>

        <?php endif ?>

      </fieldset>
    </form>

  </body>
</html>

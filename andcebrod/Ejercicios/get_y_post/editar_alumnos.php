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
        echo "<span>Nombre: <input type='text' name='nombre' value='".$_GET['nombre']."'></span>"
        echo "<span>Apellidos: <input type='text' name='apellidos' value='".$_GET['apellidos']."'></span>"
        echo "<span>Email: <input type='text' name='email' value='".$_GET['email']."'></span>"
        echo "<span><input type='submit' name='submit' value='submit'><span>";
         ?>
       <?php else: ?>

         <?php

         echo "<p>Nuevos Datos: ".$_POST['nombre'] "</p>";
         echo "<p>Nuevos Datos: ".$_POST['apellidos'] "</p>";
         echo "<p>Nuevos Datos: ".$_POST['email'] "</p>";


          ?>

        <?php endif ?>

      </fieldset>
    </form>

  </body>
</html>

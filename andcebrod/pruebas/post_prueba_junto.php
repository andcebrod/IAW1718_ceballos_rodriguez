<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Post Prueba Junto</title>
  </head>
  <body>

<?php if (!isset($_POST['email'])) : ?>
    <form method="post">
      <legend>Personal Info</legend>
      <fieldset>
        <p>Nombre: <input type="text" name="nombre" required></p>
        <p>Apellidos: <input type="text" name="apellidos"></p>
        <p>Email: <input type="mail" name="email" required></p>
        <p>Contraseña: <input type="password" name="contraseña"></p>
        <p>Foto: <input type="file" name="archivo"></p>
      <input type="submit" name="enviar" value="enviar">
      </fieldset>
    </form>

  <?php else: ?>

    <?php

    echo "<h2>Los datos han sido enviados </h2>";
    var_dump($_POST);

     ?>

   <?php endif ?>

  </body>
</html>

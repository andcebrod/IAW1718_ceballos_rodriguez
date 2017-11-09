<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Editar Alumnos </title>
  </head>
  <body>

  <?php if (isset($_GET['nombre']) && !isset($_POST["nombre"])) : ?>

    <form method="post">
      <fieldset>

      <p>Nombre: <input type='text' name='nombre' value="<?php echo $_GET['nombre']; ?>" required></p>
      <p> Apellidos: <input type='text' name='apellidos' value="<?php echo $_GET['apellidos']; ?>" required></p>
      <p> Email: <input type='text' name='email' value="<?php echo $_GET['email']; ?>" required></p>
      <p><input type='submit' name='enviar' value='Enviar'><p>
      </fieldset>
    </form>


    <?php




     ?>



     <?php else: ?>

       <?php
        if (empty($_GET)) {
          echo "No tengo datos del alumno a editar";
        } else {
          echo "<h1>Datos actualizados </h1>";
          echo "<p><b>Name: </b>".$_POST['nombre']."</p>";
          echo "<p><b>Lastname: </b>".$_POST['apellidos']."</p>";
          echo "<p><b>Email: </b>".$_POST['email']."</p>";
        }


          ?>



        <?php endif ?>



  </body>
</html>

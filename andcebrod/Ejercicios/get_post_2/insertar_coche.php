<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar coche</title>
  </head>
  <body>
    <?php if (empty($_POST["matricula"])) : ?>
    <form method="post">
      <fieldset>
        <p><b>MATRICULA: </b><input type="text" name="matricula" required></p>
        <p><b>KM: </b><input type="text" name="km" required></p>
        <p><b>FECHA MATRICULA: </b><input type="date" name="date" required></p>
        <p><b>MARCA: </b><input type="text" name="marca" required></p>
        <p><b>MODELO: </b><input type="text" name="modelo" required></p>
        <p><input type="submit" name="submit" value="Enviar"></p>
      </fieldset>
    </form>


     <?php else: ?>
       <?php
       echo "<a href='ficha_coche.php?matricula=".$_POST["matricula"].
       "&km=".$_POST["km"].
       "&date=".$_POST["date"].
       "&marca=".$_POST["marca"].
       "&modelo=".$_POST["modelo"]."'>CLICK PARA CREAR FICHA</a>";

        ?>

        <?php endif ?>


  </body>
</html>

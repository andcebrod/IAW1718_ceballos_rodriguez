<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
<?php if (!isset($_POST["num"])) : ?>
    <form action="ej1.php" method="post">

      <input type="number" name="num" value="">
      <input type="submit" name="submit" value="Enviar">
  </form>
      <?php else: ?>
      <?php

      if (($_POST['num']/$_POST['num'])==1) {

       echo "No es primo";

      } else {

        echo "Es primo";
        for ($i=0; $i < $_POST['num']; $i++) {
          if ($i/$i==1) {
            echo "$i";
          }
        }



      }




      ?>

<?php endif ?>



  </body>
</html>

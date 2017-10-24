<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tabla Multiplicar</title>
  </head>
  <body>

<table style="border: 1px solid black">
  <?php
    $number = 4;

    echo "<tr><td>MULTIPLICATION TABLE $number</td></tr>";
    for ($i=1;$i<=10;$i++) {
      $result=$number*$i;
      echo "<tr><td>$number * $i = $result </td></tr>";
    }

  ?>
</table>


  </body>
</html>

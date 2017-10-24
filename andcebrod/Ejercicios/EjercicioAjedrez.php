<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TABLAS</title>
    <style media="screen">
      td {

      }
      .cell {
        
      }
    </style>
  </head>
  <body>

<table style="border: 1px solid black">

  <?php

  $n = 5;
  $posicion=0;

  for ($i=0; $i <= $n ; $i++) {

    echo "<tr>";

          for ($p=0; $p <= $n ; $p++) {


            if (($i+$p)%2==0) {
              echo "<td class= 'cell'></td>";
            } else {
              echo "<td class= 'cell'></td>";
            }
            $posicion++;

          }

    echo "</tr>";

  }


   ?>
</table>



  </body>
</html>

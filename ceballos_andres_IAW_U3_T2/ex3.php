<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ex3 php</title>
  </head>
  <body>

<table>

  <?php

  $var = array
    (
    array("A" => 1,"B"=>2,"C"=>3),
    array("D"=>4,"E"=>5,"F"=>6),
    array("G"=>7,"H"=>8,"I"=>9),
    );
    echo "<tr>";
    for ($i=0; $i < 3; $i++) {
      foreach ($var as $key => $value) {
        echo "<td>"$var[$key][$value]."</td>";
      };
    }

      echo "</tr>";




   ?>

</table>





  </body>
</html>

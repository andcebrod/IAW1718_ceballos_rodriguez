<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ex3 php</title>
  </head>
  <body>

<table border="1px solid black">

  <?php

  $v=[["A"=>1,"B"=>2,"C"=>3],["D"=>4,"E"=>5, "F"=>6],["G"=>7,"H"=>8,"I"=>9]];

    for ($i=0; $i < sizeof($v); $i++) {
        echo "<tr>";
        foreach ($v[$i] as $k => $value) {
            echo "<td>";
            echo $k.":".$value;
            echo "</td>";
        };
    }
    echo "</tr>";
   ?>

</table>





  </body>
</html>

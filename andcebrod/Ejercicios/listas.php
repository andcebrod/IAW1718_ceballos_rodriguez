<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listas con PHP</title>
  </head>
  <body>

<ol>

<?php

$number = 4;

for ($i=1;$i<=3;$i++) {

  echo "<li>A";
  echo "<ol>";

  for ($p=1; $p <= 3 ; $p++) {
    echo "<li>A</li>";

  }
  echo "</ol>";
  echo  "</li>";
}


 ?>



</ol>





  </body>
</html>

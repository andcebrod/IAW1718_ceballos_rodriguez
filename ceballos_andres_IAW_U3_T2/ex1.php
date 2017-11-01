<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ex1 php</title>
  </head>

  <body>
<ul>
  <?php

  $v1=["A","B","C","D"];
  for ($i = sizeof($v1)-1; $i>=0; $i--) {

    echo "<li>".$v1[$i]."</li>";
  }
   ?>

</ul>


  </body>


</html>

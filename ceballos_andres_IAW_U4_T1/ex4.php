<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ex4 php</title>
  </head>
  <body>

    <?php

    $abc = 'abc';
    while ($a < 9) {
      echo "$abc ";
      $a++;
    };

echo "<br>";

    $xyz = 'xyz';
    do {
      echo "$xyz ";
      $i++;
    } while ($i < 9);

echo "<br>";

for ($j=1; $j < 10 ; $j++) {
echo "$j ";
};

echo "<br>";
?>

<ol>
<?php

$posicion = 65;
$letra= chr($posicion);
for ($p=1; $p < 7; $p++) {
    echo "<li> item $letra";
    $posicion++;
    $letra= chr($posicion);
};

 ?>

</ol>

  </body>
</html>

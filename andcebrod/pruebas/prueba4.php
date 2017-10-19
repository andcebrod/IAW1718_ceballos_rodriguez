<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>prueba 4</title>
  </head>
  <body>
    <h1>OPERACIONES CON VARIABLES: </h1>
<h2>PRIMERA FORMA: </h2>
<?php

$var1 = 5;
$var2 = 2;

echo "Primer número = $var1<br>";
echo  "Segundo número = $var2 <br>";
$suma = $var1+$var2;
$resta = $var1-$var2;
$multi = $var1*$var2;
$divi = $var1/$var2;

echo "La suma es $suma<br>";
echo "La resta es $resta<br>";
echo "La multiplicación es $multi<br>";
echo "La división es ".round($divi)."<br>";



 ?>
<h2>OTRA FORMA: </h2>

<?php
$var1 = 5;
$var2 = 2;
echo "Primer número = $var1<br>";
echo  "Segundo número = $var2 <br>";
echo "<p>La suma es: ".($var1+$var2)."</p>";
echo "<p>La resta es: ".($var1-$var2)."</p>";
echo "<p>La multiplicación es: ".($var1*$var2)."</p>";
echo "<p>La división es: ".(round($var1/$var2))."</p>";
 ?>
  </body>
</html>

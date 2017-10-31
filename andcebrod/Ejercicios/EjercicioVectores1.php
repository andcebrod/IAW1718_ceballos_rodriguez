<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio Vectores</title>
  </head>
  <body>


    <?php
$v1=[
"Nombre" => "Pepe",
"Apellido" => "Pérez",
"Dirección" => "Calle San Jacinto",
"Email" => "pepeperez@gmail.com",
  ];

echo "<ul>";
    foreach ($v1 as $k => $v) {
      echo "<li><b>$k: </b>$v</li>";
    }
echo "</ul>";
     ?>

<table border="1px solid black">
  <?php

  echo "<tr>";
  foreach ($v1 as $k =>$v ) {
    echo "<th>".$k."</th> ";
  }
  echo"</tr>";

echo "<tr>";
foreach ($v1 as $k => $v) {
  echo "<td>".$v."</td> ";
}
echo "</tr>";
   ?>
</table><br>

<?php

$v2=[27,89,100,75,2,6,70,50,11,9];
$c = 0;
$resultado = 0;

for ($i = 0; $i < sizeof($v2); $i++) {
  $c=$c+$v2[$i];
};

$resultado = $c/sizeof($v2) ;

echo "La media del array es: $resultado<br>";

$max = $v2[0];
$min = $v2[0];

for ($i=0; $i < sizeof($v2) ; $i++) {

  if ($max < $v2[$i]) {
    $max = $v2[$i];
  };
};

for ($i=0; $i < sizeof($v2) ; $i++) {

  if ($min > $v2[$i]) {
    $min = $v2[$i];
  };
};

echo "El máximo es $max<br>";
echo "El mínimo es $min<br>";

 ?>

  </body>
</html>

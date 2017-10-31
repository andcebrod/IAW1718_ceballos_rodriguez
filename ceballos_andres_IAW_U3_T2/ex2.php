<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ex 2</title>
  </head>
  <body>

<?php
$v1=[2,4,6,8];
$v2=[7,8,9,10];
$v3=[];

for ($i = 0; $i < sizeof($v1); $i++) {
$v3[]=$v1[$i];

};
for ($j = 0; $j < sizeof($v2); $j++) {
$v3[]=$v2[$j];

};

var_dump($v3);


 ?>


  </body>
</html>

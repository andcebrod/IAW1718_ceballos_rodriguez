<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba 5</title>
  </head>
  <body>

    <?php

$var1 = 5 ;
$var2 = 20;

echo "<h1>NUMEROS</h1>";
echo "Primer número = $var1<br>";
echo  "Segundo número = $var2 <br>";

//USANDO EL IF
if ($var1>$var2){

echo "$var1 (El primer numero) es mayor que $var2 (el segundo número)";

}else {

echo "$var2 (El segundo numero) es mayor que $var1 (el primer número)";

}

// FECHAS CON IF
echo "<p><h1>FECHAS</h1></p>";

$fecha = date(d);

echo "<p><h2>Hoy es $fecha</h2></p>";

if ($fecha > 10) {
  echo "<p><h2>Estoy de Servicio</h2></p>";
}else {
  echo "<p><h2>Fuera de Servicio</h2></p>";
}














     ?>

  </body>
</html>

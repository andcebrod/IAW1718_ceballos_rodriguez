<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ex4 php</title>
  </head>
  <body>

    <table border="1px solid black">

<thead>
  <th>Color Name</th>
  <th>Hex Code</th>
</thead>
      <?php
      $c=["BlanchedAlmond" => "#ffebcd",
      "CadetBlue" => "#5f9ea0",
      "BurlyWood" => "#deb887",
      "DarkOliveGreen" => "#556b2f",
      "HotPink" => "#ff69b4",
      "Papayawhip" => "#ffefd5"];

foreach ($c as $k => $v) {
  echo "<tr bgcolor='$v'>";
  echo "<td>$k</td><td>$v</td>";
  echo "</tr>";
}





       ?>

    </table>

  </body>
</html>

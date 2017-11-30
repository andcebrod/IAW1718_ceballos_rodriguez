<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Informe </title>
  </head>
  <body>
    <table border="1px solid black">
<thead>
  <th> Id Reparacion </th>
  <th> Matricula </th>
  <th> Avería </th>
  <th> Codigo de Empleado </th>

</thead>
<tbody>

    <?php

      //CREATING THE CONNECTION
      $connection = new mysqli("192.168.1.61", "root", "Admin2015", "tf",3316);
      $connection->set_charset("uft8");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */
        $query="select * from reparaciones r join intervienen i on r.IdReparacion = i.IdReparacion where r.IdReparacion = '".$_GET['IdReparacion']."'";

      if ($result = $connection->query($query)) {

        }
        while($obj = $result->fetch_object()) {
          // VARIABLES PARA NO CONCATENAR
          $idrep = $obj->IdReparacion;
          $matr = $obj->Matricula;
          $averia = $obj->Averia;
          $codemp = $obj->CodEmpleado;
            //PRINTING EACH ROW
            echo "<tr>";
              echo "<td>".$idrep."</td>";
              echo "<td>".$matr."</td>";
              echo "<td>".$averia."</td>";
              echo "<td>".$codemp."</td>";
            echo "</tr>";
        }

?>
</tbody>
</table>
<table border="1px solid black">
<thead>
<th> Id Reparacion </th>
<th> Matricula </th>
<th> Avería </th>
<th> Id Recambio </th>

</thead>
<tbody>
        <?php

        $query2="SELECT * FROM reparaciones r JOIN incluyen i ON r.IdReparacion = i.IdReparacion WHERE r.IdReparacion ='".$_GET['IdReparacion']."'";

      if ($result = $connection->query($query2)) {

        }
        while($obj = $result->fetch_object()) {
          // VARIABLES PARA NO CONCATENAR
          $idrep2 = $obj->IdReparacion;
          $matr2 = $obj->Matricula;
          $averia2 = $obj->Averia;
          $idrec = $obj->IdRecambio;

            //PRINTING EACH ROW
            echo "<tr>";
              echo "<td>".$idrep2."</td>";
              echo "<td>".$matr2."</td>";
              echo "<td>".$averia2."</td>";
              echo "<td>".$idrec."</td>";
            echo "</tr>";
        }

      ?>
      </tbody>
    </table>
    <br><a href="reparaciones.php"><input type="button" name="volver" value="volver"></a>






  </body>
</html>

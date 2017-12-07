<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resumen</title>
  </head>
  <body>

    <?php
      //CREATING THE CONNECTION
      $connection = new mysqli("192.168.1.61", "root", "Admin2015", "tf", 3316);
      $connection->set_charset("uft8");
      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
      //MAKING A SELECT QUERY
      /* Consultas de selección que devuelven un conjunto de resultados */

      ?>
          <?php if (!isset($_GET["id"])) : ?>

            <?php

            echo "No has seleccionado reparación"

             ?>


          <?php else: ?>
            <?php
            $query="SELECT * from vehiculos v join reparaciones r
            on v.matricula = r.matricula where IdReparacion =".$_GET['id'];

          if ($result = $connection->query($query)) {
          }
            echo "<h2>DATOS DEL VEHICULO:</h2>";
            echo "<table>";
            echo "<thead>";
            echo "<th>Matricula</th>";
            echo "<th>Marca</th>";
            echo "<th>Modelo</th>";
            echo "</thead>";
            echo "<tbody>";
            while ($obj = $result->fetch_object()) {
                $matricula = $obj->Matricula;
                $marca = $obj->Marca;
                $modelo = $obj->Modelo;
                $Fecha = $obj->FechaEntrada;
                echo "<tr>";
                echo "<td>".$matricula."</td>";
                echo "<td>".$marca."</td>";
                echo "<td>".$modelo."</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</tbody>";
            echo "<h2>FECHA DE LA REPARACION:".$Fecha."</h2>";

            $query2 = "SELECT * from clientes c join facturas f on c.CodCliente = f.CodCliente
            where IdReparacion =".$_GET['id'];
            if ($result = $connection->query($query2)) {
            }
            echo "<h2>DATOS DEL CLIENTE QUE HA PAGADO:</h2>";
            echo "<table>";
            echo "<thead>";
            echo "<th>Nombre</th>";
            echo "<th>Apellidos</th>";
            echo "<th>Direccion</th>";
            echo "</thead>";
            echo "<tbody>";

            while ($obj = $result->fetch_object()) {
                $nomb = $obj->Nombre;
                $apell = $obj->Apellidos;
                $dir = $obj->Direccion;

                echo "<tr>";
                echo "<td>".$nomb."</td>";
                echo "<td>".$apell."</td>";
                echo "<td>".$dir."</td>";
                echo "</tr>";
            }

            echo "</table>";

            echo "<table>";

            $query3 = "SELECT * from reparaciones r
            join incluyen i on r.IdReparacion = i.IdReparacion
            join recambios re on i.IdRecambio = re.IdRecambio
            where r.IdReparacion =".$_GET['id'] ;

            if ($result = $connection->query($query3)) {

            }

              echo "<h2> PIEZAS USADAS :</h2>";
              echo "<table>";
              echo "<thead>";
              echo "<th>Nombre pieza</th>";
              echo "<th>Unidades Usadas</th>";
              echo "<th>Precio de las Piezas</th>";
              echo "</thead>";
              echo "<tbody>";

              while ($obj = $result->fetch_object()) {

                $desc = $obj->Descripcion;
                $unid = $obj->Unidades;
                $prec =$obj->PrecioReferencia;
                $unidades = $obj->Unidades;
                $prectot = $unidades * $prec;

                echo "<tr>";
                echo "<td>".$desc."</td>";
                echo "<td>".$unid."</td>";
                echo "<td>".$prectot."</td>";

                echo "</tr>";
                }
                echo "</table>";




             ?>


          <?php endif ?>
  </body>
</html>

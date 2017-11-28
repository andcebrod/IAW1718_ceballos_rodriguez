<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reparaciones</title>
    <style media="screen">
      img {
        height: 20px;
        width: 20px;
      }


    </style>
  </head>
  <body>


    <table border="2px solid black" >
      <thead>
        <th>Id Reparacion</th>
        <th>Matricula</th>
        <th>Fecha Entrada</th>
        <th>KM</th>
        <th>Avería</th>
        <th>FechaSalida</th>
        <th>Reparado</th>
        <th>Observaciones</th>
        <th>Opciones</th>
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
            $query="SELECT * from reparaciones";
          if ($result = $connection->query($query)) {

            }
          ?>
          <?php

          while($obj = $result->fetch_object()) {
            // VARIABLES PARA NO CONCATENAR
            $idrep = $obj->IdReparacion;
            $matr = $obj->Matricula;
            $fechEnt = $obj->FechaEntrada;
            $km = $obj->Km;
            $averia = $obj->Averia;
            $fechSal = $obj->FechaSalida;
            $reparado = $obj->Reparado;
            $observaciones = $obj->Observaciones;

              //PRINTING EACH ROW
              echo "<tr>";
                echo "<td>".$idrep."</td>";
                echo "<td>".$matr."</td>";
                echo "<td>".$fechEnt."</td>";
                echo "<td>".$km."</td>";
                echo "<td>".$averia."</td>";
                echo "<td>".$fechSal."</td>";
                echo "<td>".$reparado."</td>";
                echo "<td>".$observaciones."</td>";
                echo "<td>"."<a href='borrar.php?IdReparacion=".$idrep."'><img src='delete.png'></a>".
                "<a href='asignar.php?IdReparacion=".$idrep."&Matricula=".$matr."&FechaEntrada=".$fechEnt."&Km=".$km."&Averia=".$averia."&FechaSalida=".$fechSal."&Reparado=".$reparado."&Observaciones=".$observaciones."'><img src='user.png'></a>".
                "<a href='informe.php?IdReparacion=".$idrep."&Matricula=".$matr."&FechaEntrada=".$fechEnt."&Km=".$km."&Averia=".$averia."&FechaSalida=".$fechSal."&Reparado=".$reparado."&Observaciones=".$observaciones."'><img src='view.png'></a>"."</td>";
              echo "</tr>";
          }
          $result->close();
          unset($obj);
          unset($connection);

           ?>


      </tbody>
    </table>

  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Clientes </title>
    <style media="screen">
      img {
        height: 12px;
        width: 12px;
      }

    </style>
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

        $query="SELECT * from clientes";

      ?>


      <table style="border:1px solid black">
      <thead>
        <tr>
          <th>CodCliente</th>
          <th>DNI</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Direccion</th>
          <th>Teléfono</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>

        <?php
        while($obj = $result->fetch_object()) {
          // VARIABLES PARA NO CONCATENAR
          $codcliente = $obj->CodCliente;
          $nombre = $obj->Nombre;
          $apellidos = $obj->Apellidos;
          $dni = $obj->DNI;
          $direccion = $obj->Direccion;
          $telefono = $obj->Telefono;

            //PRINTING EACH ROW
            echo "<tr>";
              echo "<td>".$obj->CodCliente."</td>";
              echo "<td>".$obj->Nombre."</td>";
              echo "<td>".$obj->Apellidos."</td>";
              echo "<td>".$obj->DNI."</td>";
              echo "<td>".$obj->Direccion."</td>";
              echo "<td>".$obj->Telefono."</td>";
              echo "<td>"."<a href='editar_cliente.php?'><img src='lapiz.png'></a>"."</td>";
            echo "</tr>";
        }

         ?>

      </tbody>

    </table>

  </body>

</html>

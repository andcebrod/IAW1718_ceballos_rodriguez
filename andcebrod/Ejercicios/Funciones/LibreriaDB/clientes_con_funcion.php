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
    <table style="border:1px solid black">
    <thead>
      <tr>
        <th>CodCliente</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>DNI</th>
        <th>Direccion</th>
        <th>Teléfono</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>

      <?php
      include_once "library.php";
    if (!$connection = conectar_DB()) {
      exit();
    }
        $query="SELECT * from clientes";
        if ($result = $connection->query($query)) {

}
        ?>

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
              echo "<td>".$codcliente."</td>";
              echo "<td>".$nombre."</td>";
              echo "<td>".$apellidos."</td>";
              echo "<td>".$dni."</td>";
              echo "<td>".$direccion."</td>";
              echo "<td>".$telefono."</td>";
              echo "<td>"."<a href='editar_cliente.php?CodCliente=".$codcliente."&Nombre=".$nombre."&Apellidos=".$apellidos."&DNI=".$dni."&Direccion=".$direccion."&Telefono=".$telefono."'><img src='lapiz.png'></a>"."</td>";
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

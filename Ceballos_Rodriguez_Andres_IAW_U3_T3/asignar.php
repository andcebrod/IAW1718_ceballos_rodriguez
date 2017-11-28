<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ASIGNAR </title>
  </head>
  <body>

    <form method="post">
      <fieldset>
        <?php

        //CREATING THE CONNECTION
        $connection = new mysqli("192.168.1.61", "root", "Admin2015", "tf", 3316);
        $connection->set_charset("uft8");

        //TESTING IF THE CONNECTION WAS RIGHT

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }

            $query="SELECT Apellidos,Nombre,DNI,CodEmpleado from empleados order by apellidos";
          if ($result = $connection->query($query)) {

          }
            echo "<span>Propietario: </span><select name=CodCliente>";
              while ($obj = $result->fetch_object()) {
                  //PRINTING EACH ROW
                  echo "<option value='".$obj->CodEmpleado."'>".$obj->DNI." ".$obj->Nombre." ".$obj->Apellidos."</option>";
              }
            echo "</select><br>";
         ?>
         <input type="submit" name="asignar" value="Asignar">
      </fieldset>
    </form>

  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ASIGNAR </title>
  </head>
  <body>
<?php if (!isset($_POST["codempleado"])) : ?>
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
            echo "<span>Asignar reparacion a: </span><select name=codempleado>";
              while ($obj = $result->fetch_object()) {
                  //PRINTING EACH ROW
                  echo "<option value='".$obj->CodEmpleado."'>".$obj->Apellidos.", ".$obj->Nombre." ".$obj->DNI." ".$obj->CodEmpleado."</option>";
              }
            echo "</select><br>";
         ?>
         <input type="submit" name="submit" value="Asignar">


      </fieldset>
    </form>

      <?php else: ?>


    <?php

        $query2 = "UPDATE intervienen SET CodEmpleado='".$_POST['codempleado']."' WHERE IdReparacion='".$_GET['IdReparacion']."'";

     ?>


  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ASIGNAR </title>
  </head>
  <body>
<?php
//CREATING THE CONNECTION
$connection = new mysqli("192.168.1.61", "root", "Admin2015", "tf", 3316);
$connection->set_charset("uft8");
?>
<?php if (!isset($_POST["codempleado"])) : ?>
    <form method="post">
      <fieldset>
        <?php
        var_dump($_GET);



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
                  echo "<option value='".$obj->CodEmpleado."'>".$obj->Apellidos.", ".$obj->Nombre." ".$obj->DNI."</option>";
              }
            echo "</select><br>";
         ?>
         <input type="submit" name="submit" value="Asignar">
         <a href="reparaciones.php"><input type="button" name="volver" value="volver"></a>

      </fieldset>
    </form>

      <?php else: ?>
    <?php
        $query = "INSERT INTO intervienen (CodEmpleado, IdReparacion ) values ('".$_POST['codempleado']."',".$_GET['IdReparacion'].")";
        echo $query;
        if ($connection->query($query)) {
          header('Location: reparaciones.php');
        } else {
          echo "Se ha producido un error";
        }
     ?>

   <?php endif ?>
  </body>
</html>

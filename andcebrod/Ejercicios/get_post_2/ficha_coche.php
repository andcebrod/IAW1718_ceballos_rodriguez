<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ficha del coche insertado</title>
  </head>
  <body>
    <h2>Coche Insertado: </h2>
    <ul>

      <li><b>Matricula: </b> <span><?php echo $_GET["matricula"]; ?></span> </li>
      <li><b>Km: </b> <span><?php echo $_GET["km"]; ?></span></li>
      <li><b>Fecha Matriculación: </b> <span><?php echo $_GET["date"]; ?></span> </li>
      <li><b>Marca: </b> <span><?php echo $_GET["marca"]; ?></span> </li>
      <li><b>Modelo: </b> <span><?php echo $_GET["modelo"]; ?></span> </li>
    </ul>

  </body>
</html>

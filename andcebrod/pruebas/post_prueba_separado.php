<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba del Post Archivos Separados</title>
  </head>
  <body>

    <form action="post_prueba_mostrar.php" method="post">
      <fieldset>
        <p>Nombre: <input type="text" name="nombre"></p>
        <p>Apellidos: <input type="text" name="apellidos"></p>
        <p>Email: <input type="mail" name="email"></p>
        <p>Contraseña: <input type="password" name="contraseña"></p>
        <p>Foto: <input type="file" name="archivo"></p>
      <input type="submit" name="enviar" value="enviar">
      </fieldset>
    </form>



  </body>
</html>

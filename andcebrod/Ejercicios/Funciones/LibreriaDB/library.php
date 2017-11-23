<?php

function conectar_DB()
{
  $connection = new mysqli("192.168.1.61", "root", "Admin2015", "tf", 3316);
  $connection->set_charset("uft-8");

  if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $connection->connect_error);
      return FALSE;
  }

return $connection;

}

  ?>

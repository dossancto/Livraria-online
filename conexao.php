<?php

  $server = 'localhost';
  $user = 'us_livraria';
  $password = '123456';
  $database = 'db_livraria';

  $connection = new PDO("mysql:host=$server;dbname=$database", $user, $password);

?>

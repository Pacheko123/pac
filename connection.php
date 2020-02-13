<?php

  $db = 'pacheko';
  $server = 'localhost';
  $user = 'root';
  $password = '';

  $con = new mysqli($server,$user,$password,$db);

  if (!$con) {
    echo "connection could not be created";
  }

 ?>

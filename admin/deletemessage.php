<?php

// This is a sample code in case you wish to check the username from a mysql db table
require('../connection.php');
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $sql = "delete from feeds where id = '$id'";
  mysqli_query($con, $sql);
}

?>

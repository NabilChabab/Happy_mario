<?php

  $con = mysqli_connect('db',"workshop","workshop","workshop");
  if (!$con) {
    die("Connection failed: ". mysqli_connect_error());
  }
?>

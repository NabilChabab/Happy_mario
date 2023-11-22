<?php
include "connect.php";
$id = $_GET["id"];
$requet = "DELETE FROM `teachers` WHERE id = $id";
$result = mysqli_query($connect, $requet);

if ($result) {
  header("Location: teachers.php?msg=Teacher deleted successfully");
} else {
  echo "Failed: " . mysqli_error($connect);
}
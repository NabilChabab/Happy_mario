<?php
include "connect.php";
$id = $_GET["id"];
$requet = "DELETE FROM `students` WHERE id = $id";
$result = mysqli_query($connect, $requet);

if ($result) {
  header("Location: students.php?msg=Student deleted successfully");
} else {
  echo "Failed: " . mysqli_error($connect);
}
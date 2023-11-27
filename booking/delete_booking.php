<?php
include "../connect.php";
$id = $_GET["id"];
$requet = "DELETE FROM `booking` WHERE id = $id";
$result = mysqli_query($connect, $requet);

if ($result) {
  header("Location: booking.php?msg=Booking deleted successfully");
} else {
  echo "Failed: " . mysqli_error($connect);
}
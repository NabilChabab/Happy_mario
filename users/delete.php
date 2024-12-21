<?php
include "../connect.php";
session_start();
$id = $_GET["id"];
$requet = "DELETE FROM `users` WHERE id = $id";
$result = mysqli_query($connect, $requet);

if ($result) {
  $_SESSION['message'] = 'User deleted successfully!';
  $_SESSION['message_type'] = 'success';
  header("Location: users.php");
} else {
  echo "Failed: " . mysqli_error($connect);
}

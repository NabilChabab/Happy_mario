<?php


include('../config.php');
session_start();

if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $email = $_POST['email'];
  $role = $_POST['role'];
  $id = $_POST['id'];
  $query = "UPDATE `users` SET
                    `username` = '$username',
                    `email` = '$email',
                    `role` = '$role' WHERE `id` = $id";

  $result = mysqli_query($connect, $query);

  if ($result) {
    $_SESSION['message'] = 'User updated successfully!';
    $_SESSION['message_type'] = 'success';
    header('location: users.php');
  }
}

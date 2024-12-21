<?php
include('../config.php');
session_start();

if (isset($_POST['submit'])) {
  extract($_POST);


  if (empty($username)) {
    $_SESSION['message'] = 'Username is required';
    $_SESSION['message_type'] = 'error';
  } else {
    if (isset($_FILES['profile'])) {
      $profile = $_FILES["profile"]["name"];
      $tempname = $_FILES["profile"]["tmp_name"];
      $folder = "../public/assets/img/" . $profile;
    }

    $query = "INSERT INTO `users`(`username`, `email`, `role`,`profile`) VALUES ('$username','$email','$role','$folder')";
    $stm = mysqli_query($connect, $query);

    if ($stm) {
      move_uploaded_file($tempname, $folder);

      $_SESSION['message_type'] = 'success';
      $_SESSION['message'] = 'User added successfully!';
      header('Location: users.php');
      exit;
    } else {
      $_SESSION['message'] = 'Failed to add user';
      $_SESSION['message_type'] = 'error';
      header('Location: users.php');
      exit;
    }


  }

  header('Location: users.php');
  exit;

}

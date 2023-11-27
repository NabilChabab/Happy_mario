<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="../assets/css/students.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>

  .col-9{
    margin-left:10%;
  }
</style>
<body>


  <div class="aside">
    <div class="navigation">
      <ul>
        <li>
          <a href="#" class="logo">marionette<p>high school</p></a>
          <div class="rows">
            <img src="../assets/images/add.png">
            <h1>Add new task</h1>
          </div>
        </li>
        <li>
          <a href="../index.php">
            <span class="title"><i class='bx bxs-home-circle'></i>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="#" class="active">
            <span class="title"><i class='bx bxs-user'></i>Students</span>
          </a>
        </li>

        <li>
          <a href="../teachers/teachers.php">
            <span class="title"><i class='bx bxs-user'></i>Teachers</span>
          </a>
        </li>

        <li>
          <a href="../booking/booking.php">
            <span class="title"><i class='bx bxs-bookmark-alt'></i>Booking</span>
          </a>
        </li>

        <li>
          <a href="../vistors.php">
            <span class="title"><i class='bx bxs-low-vision'></i>Visitors</span>
          </a>
        </li>

        <li>
          <a href="../settings.php">
            <span class="title"><i class='bx bxs-cog'></i>Settings</span>
          </a>
        </li>
        <div>
          <a href="#" class="logout">Logout</a>
        </div>
      </ul>

    </div>
  </div>

  <div class="header">
    <div class='bx bxs-chevron-left' id="remove"></div>
    <div class="tit">
      <h1>Students</h1>
    </div>
    <div class="search">
      <input type="search" placeholder="Search">
      <div class="icons">
        <img src="../assets/images/bell.png" alt="" srcset="">
      </div>
      <div class="admin">
        <img src="../assets/images/me.jpg" alt="" srcset="">
        <div class="name">
          <h1>CHABAB Nabil <span>admin</span></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="head d-flex justify-content-between">
    <h1>Overview</h1>
    <div class="dropdown date">
      <select class="form-select" aria-label="Default select example" style="border:none;" name="language">
        <option value="en">English</option>
        <option value="fr">French</option>
        <option value="sp">Spanish</option>
      </select>
    </div>
  </div>
  <div class="content col-9">
  <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="add_students.php" class="btn btn-dark mb-3" data-aos="fade-down" data-aos-duration="1500">Add New Student</a>
    <table class="table table-hover text-start">
      <thead class="table-dark">
        <tr data-aos="fade-left" data-aos-duration="1500">
          <th scope="col" class = "col-1">Numero</th>
          <th scope="col" class = "col-1">CIN</th>
          <th scope="col" data-aos="fade-left">First Name</th>
          <th scope="col" data-aos="fade-left">Last Name</th>
          <th scope="col" data-aos="fade-left">Email</th>
          <th scope="col" data-aos="fade-left">Gender</th>
          <th scope="col" data-aos="fade-left">Profile</th>
          <th scope="col" data-aos="fade-left">Action</th>
        </tr>
      </thead>
      <tbody data-aos="fade-right" data-aos-duration="1500">
        <?php
        include "../connect.php";
          $requet = "SELECT * FROM `students`";
          $query = mysqli_query($connect , $requet);
          while($rows = mysqli_fetch_assoc($query)){
            ?>

          <tr>
            <th scope="row"><?php echo $rows['id']?></th>
            <th scope="row"><?php echo $rows['cin']?></th>
            <td><?php echo $rows['nom']?></td>
            <td><?php echo $rows['prenom']?></td>
            <td><?php echo $rows['email']?></td>
            <td><?php echo $rows['gender']?></td>
            <td><img src="../assets/images/<?php echo $rows['image'];?>" style="max-width:40px;" class="rounded-5"></td>
            <td><a href="edit.php?id=<?php echo $rows['id']?>" class="link-dark"><i class='bx bxs-pencil fs-5 me-3'></i></a><a href="delete.php?id=<?php echo $rows['id']?>" class="link-danger"><i class='bx bxs-user-x fs-5'></i></a></td>
          </tr>

            <?php
            
        
          }
        ?>
      </tbody>
    </table>
  </div>

  


  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>



<script>
  AOS.init();
</script>

</html>
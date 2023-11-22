<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


  <div class="aside">
    <div class="navigation">
      <ul>
        <li>
          <a href="#" class="logo">marionette<p>high school</p></a>
          <div class="rows">
            <img src="assets/images/add.png">
            <h1>Add new task</h1>
          </div>
        </li>
        <li>
          <a href="index.php">
            <span class="title"><i class='bx bxs-home-circle'></i>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="students.php">
            <span class="title"><i class='bx bxs-user'></i>Students</span>
          </a>
        </li>

        <li>
          <a href="teachers.php">
            <span class="title"><i class='bx bxs-user'></i>Teachers</span>
          </a>
        </li>

        <li>
          <a href="#" class="active">
            <span class="title"><i class='bx bxs-bookmark-alt'></i>Booking</span>
          </a>
        </li>

        <li>
          <a href="vistors.php">
            <span class="title"><i class='bx bxs-low-vision'></i>Visitors</span>
          </a>
        </li>

        <li>
          <a href="settings.php">
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
      <h1>Dashboard</h1>
    </div>
    <div class="search">
      <input type="search" placeholder="Search">
      <div class="icons">
        <img src="assets/images/bell.png" alt="" srcset="">
      </div>
      <div class="admin">
        <img src="assets/images/me.jpg" alt="" srcset="">
        <div class="name">
          <h1>CHABAB Nabil <span>admin</span></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="head d-flex justify-content-between">
    <h1>Overview</h1>
    <div class="dropdown date">
      <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Last Week</button>
      <ul class="dropdown-menu rounded-4">
        <li><button class="dropdown-item" type="button">Last Day</button></li>
        <li><button class="dropdown-item" type="button">Last Month</button></li>
        <li><button class="dropdown-item" type="button">Last Year</button></li>
      </ul>
    </div>
  </div>
  


  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>


<script src="assets/js/main.js"></script>
</html>
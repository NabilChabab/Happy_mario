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
        <li class="active">
          <a href="" class="active">
            <span class="title"><i class='bx bxs-home-circle'></i>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="students/students.php">
            <span class="title"><i class='bx bxs-user'></i>Students</span>
          </a>
        </li>

        <li>
          <a href="teachers/teachers.php">
            <span class="title"><i class='bx bxs-user'></i>Teachers</span>
          </a>
        </li>

        <li>
          <a href="booking/booking.php">
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
  <div class="content">
    <div class="row">
      <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1500">
        <div class="card border-left-primary shadow h-100 custom-card">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col-md-8 offset-md-2 text-center">
                <img class="rounded-circle mb-4" alt="avatar1" src="assets/images/userimg.png">
                <div class="h3 mb-2 font-weight-bold text-black">Total Students</div>
                <div class="h5 mb-4 font-weight-bold text-gray-800">10,000+ / year</div>
                <div class="h6 mb-0 font-weight-bold text-gray-800">15% increase from last year</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-down" data-aos-duration="1500">
        <div class="card border-left-primary shadow h-100 custom-card">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col-md-8 offset-md-2 text-center">
                <img class="rounded-circle mb-4" alt="avatar1" src="assets/images/visiimg.png">
                <div class="h3 mb-2 font-weight-bold text-black">Total Students</div>
                <div class="h5 mb-4 font-weight-bold text-gray-800">10,000+ / year</div>
                <div class="h6 mb-0 font-weight-bold text-gray-800">15% increase from last year</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1500">
        <div class="card border-left-primary shadow h-100 custom-card">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col-md-8 offset-md-2 text-center">
                <img class="rounded-circle mb-4" alt="avatar1" src="assets/images/teachimg.png">
                <div class="h3 mb-2 font-weight-bold text-black">Total Students</div>
                <div class="h5 mb-4 font-weight-bold text-gray-800">10,000+ / year</div>
                <div class="h6 mb-0 font-weight-bold text-gray-800">15% increase from last year</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="row tab">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-6 col-md-6 mb-5" data-aos="fade-right" data-aos-duration="1500">
        <div class="card border-left-primary shadow h-100 custom-card">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Study-year</th>
                    <th>Rank</th>
                    <th>%</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>CHABAB Nabil</td>
                    <td>2022-2023</td>
                    <td>Exelent</td>
                    <td><img src="assets/images/100.png"></td>
                  </tr>
                  <tr>
                    <td>MEQDAR Ghizlane</td>
                    <td>2022-2023</td>
                    <td>Exelent</td>
                    <td><img src="assets/images/90.png"></td>
                  </tr>
                  <tr>
                    <td>Mohammed SADQ</td>
                    <td>2022-2023</td>
                    <td>Exelent</td>
                    <td><img src="assets/images/80.png"></td>
                  </tr>
                  <tr>
                    <td>Omar ENNEDI</td>
                    <td>2022-2023</td>
                    <td>Exelent</td>
                    <td><img src="assets/images/70.png"></td>
                  </tr>
                  <tr>
                    <td>Abdo DADLI</td>
                    <td>2022-2023</td>
                    <td>Exelent</td>
                    <td><img src="assets/images/60.png"></td>
                  </tr>
                  <tr>
                    <td>Sanae LOUAFI</td>
                    <td>2022-2023</td>
                    <td>Exelent</td>
                    <td><img src="assets/images/50.png"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-6">
        <div class="col-xl-6 col-md-6 mb-5" data-aos="fade-left" data-aos-duration="1500">
          <div class="card border-left-primary shadow h-100 custom-card">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col-md-8 offset-md-2 text-center">
                  <img src="assets/images/900.png" alt="" srcset="" class="mb-4">
                  <div class="h5 mb-2 font-weight-bold text-black mb-4">This Year Success</div>
                  <div class="h6 mb-0 font-weight-bold text-gray-800 mb-4">15% increase from last year</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6 col-md-6 mb-5" data-aos="fade-left" data-aos-duration="1500">
          <div class="card border-left-primary shadow h-100 custom-card">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col-md-8 offset-md-2 text-center">
                  <img src="assets/images/7000.png" alt="" srcset="" class="mb-4">
                  <div class="h5 mb-2 font-weight-bold text-black mb-4">This Year Success</div>
                  <div class="h6 mb-0 font-weight-bold text-gray-800 mb-4">15% increase from last year</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
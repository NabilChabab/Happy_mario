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
    <link rel="stylesheet" href="assets/css/visitors.css">
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
                    <a href="booking.php">
                        <span class="title"><i class='bx bxs-bookmark-alt'></i>Booking</span>
                    </a>
                </li>

                <li>
                    <a href="visitors.php">
                        <span class="title"><i class='bx bxs-low-vision'></i>Visitors</span>
                    </a>
                </li>

                <li>
                    <a href="#"  class="active">
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
        <div class="col-md-7 col-xl-9">
            <div class="tab-content">
                <div class="tab-pane fade show active bg-warning rounded-4" id="account" role="tabpanel">
                    <div class="card  rounded-4">
                        <div class="card-header">
                            <div class="card-actions float-right">
                                <div class="dropdown show">
                                    <a href="#" data-toggle="dropdown" data-display="static">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-horizontal align-middle">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Public info</h5>
                        </div>
                        <div class="card-body">
                            <form id="private-form" class="private-form">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputUsername"
                                                placeholder="Username">
                                            <p class="text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="2" class="form-control" id="inputBio"
                                                placeholder="Tell something about yourself"></textarea>
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center">
                                            <img alt="Andrew Jones" src="assets/images/me.jpg"
                                                class="rounded-circle img-responsive mt-2" width="128" height="128"
                                                id="profile">
                                            <div class="mt-3 ms-3" id="upload" type="file" accepte>
                                                <span class="btn btn-primary"><i class="bx bx-upload"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>

                        </div>
                    </div>

                    <div class="card mt-5 rounded-4">
                        <div class="card-header">
                            <div class="card-actions float-right">
                                <div class="dropdown show">
                                    <a href="#" data-toggle="dropdown" data-display="static">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-more-horizontal align-middle">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Private info</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputFirstName">First name</label>
                                        <input type="text" class="form-control" id="inputFirstName"
                                            placeholder="First name">
                                            <p class="text-danger"></p>    
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputLastName">Last name</label>
                                        <input type="text" class="form-control" id="inputLastName"
                                            placeholder="Last name">
                                            <p class="text-danger"></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    <p class="text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress"
                                        placeholder="1234 Main St">
                                        <p class="text-danger"></p>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected="">Choose...</option>
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                    </select>
                                    <p class="text-danger"></p>
                                </div>
                                <div class="form-group col-md-2 mb-4">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                    <p class="text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="inputcurrentpass">Current Password</label>
                                    <input type="password" class="form-control" id="inputcurrentpass"
                                        placeholder="Current Password">
                                        <p class="text-danger"></p>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputnewpass">New Password</label>
                                        <input type="password" class="form-control" id="inputnewpass" placeholder="New Password">
                                        <p class="text-danger"></p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>

                        </div>


    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>


<script src="assets/js/main.js"></script>

</html>
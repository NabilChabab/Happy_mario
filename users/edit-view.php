<?php
session_start();  // Start session to get the message
?>

<!doctype html>
<html>

<head>
  <title>JSP - Hello World</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <!-- Nucleo Icons -->
  <link href="../public/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../public/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <link id="pagestyle" href="../public/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
</head>
<style>
  .cards {
    width: 100%;
    border: none;
    background-color: transparent;
    border: none;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  .cards img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
  }

  .cards label {
    margin-top: 30px;
    text-align: center;
    height: 40px;
    cursor: pointer;
    font-weight: bold;
    font-size: 20px;
    margin-bottom: 10px;
  }

  .cards input {
    display: none;
  }

  .custom-item {
    display: flex;
    align-items: center;
    padding: 10px;
  }

  /* Profile image styling */

  .profile-img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 10px;
  }

  /* Dropdown menu size and appearance */

  .custom-menu {
    max-height: 300px;
    overflow-y: auto;
  }

  /* Highlight on hover */

  .custom-item:hover {
    background-color: #f8f9fa;
  }

  .file-upload {
    display: none;
    /* Hide the default file input */
  }

  .file-upload-label {
    display: inline-flex;
    align-items: center;
    cursor: pointer;
    background: transparent;
    color: white;
    /* Adjust as needed */
    border: 1px solid transparent;
    /* Optional: Add border if needed */
    padding: 8px 12px;
    /* Adjust padding */
    border-radius: 5px;
    /* Optional: rounded corners */
  }

  .file-upload-label:hover {
    border: 1px solid white;
    /* Show border on hover */
  }

  .file-upload-label .icon {
    margin-right: 8px;
    /* Space between icon and text */
  }

  .text-primary-hover:hover {
    background-color: #5e72e4;
  }

  .success {
    background-color: #d9fdef !important;
    color: #216e64 !important;
  }

  .warning {
    background-color: #f1f2f4 !important;
    color: #172b4d !important;
  }

  .primary {
    background-color: #d6e4ff !important;
    color: #2b44bd !important;
  }

  .danger {
    background-color: #fee2e2 !important;
    color: #c53030 !important;
  }

  /* Force the correct background color for Toastr messages */
  .toast-success {
    background-color: #28a745 !important;
    opacity: 100% !important;
  }

  .toast-error {
    background-color: #dc3545 !important;
    /* Red for error */
  }
</style>

<body class="g-sidenav-show" style="background-color: white">
  <div class="min-height-300 position-absolute w-100" style="background-color: #5e72e4"></div>
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 shadow-blur" id="sidenav-main" style="background-color: white; z-index: 999">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <span class="ms-1 font-weight-bold">Workshop</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0" />
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link rounded" href="" style="background-color: #5e72e4">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 mb-2 d-flex align-items-center justify-content-center">
              <i class="bx bx-task text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text text-white ms-1">users</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here..." />
            </div>
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="nav-link text-white font-weight-bold px-0" href="">
                <img src="../public/images/avatar.jpg" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px" />

                <form action="../auth/login" method="post" style="display: inline" onsubmit="return confirm('Are you sure you want to logout?');">
                  <input type="hidden" name="_logout" value="logout" />
                  <button style="border: none; border: none; background-color: transparent">
                    <span class="d-sm-inline d-none text-white">Nabil CHABAB</span>
                  </button>
                </form>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      <div class="row mt-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4" style="background-color: white">
              <div class="card-header pb-0 d-flex justify-content-between align-items-center" style="background-color: white">
                <h6>Update User</h6>

              </div>
              <div class="card-body px-0 pt-0 pb-2" style="height: 100vh">
                <div class="table-responsive p-0 w-100 d-flex align-items-center justify-content-center">

                    <?php include('../connect.php');

                    $id = base64_decode($_GET['id']);

                    $query = "SELECT * FROM `users` WHERE `id` = $id";

                    $result = mysqli_query($connect, $query);

                    $row = mysqli_fetch_assoc($result);
                    ?>

                    <form action="update.php" method="POST" enctype="multipart/form-data" style="width: 600px;" class="text-center">
                      <div class="mb-3">
                        <div class="cards">
                          <img src="<?= $row['profile'] ?>" id="image" style="width: 120px; height: 120px; object-fit: cover" />
                          <label for="profile" class="text-sm">Choose Image</label>
                          <input
                            type="file"
                            id="profile"
                            name="profile"
                            class="form-control bg-transparent mt-3"
                            placeholder="Put you Picture here" />
                        </div>
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <input type="text" id="username" name="username" value="<?= $row['username'] ?>" class="form-control bg-transparent" placeholder="UserName" />
                        <input type="text" id="email" name="email" value="<?= $row['email'] ?>" class="form-control bg-transparent mt-3" placeholder="exemple@gmail.com" />
                        <select type="text" id="role" name="role" class="form-control bg-transparent mt-3" placeholder="Phone Number">
                          <option value="ADMIN" <?= $row['role'] == 'ADMIN' ? "selected" : "" ?>>ADMIN</option>
                          <option value="USER" <?= $row['role'] == 'USER' ? "selected" : "" ?>>USER</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary w-50" name="submit">save changes</button>
                    </form>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">E V E N T O</a> for a better platform.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">E V E N T O</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- Script to Show Toast -->

    <?php
    // Check if there is a session message
    if (isset($_SESSION['message'])) {
      $messageType = $_SESSION['message_type'] ?? 'success'; // Default to success if not set
      $message = $_SESSION['message'];
      // Display Toastr message
      echo "<script>
        toastr.options = {
            'closeButton': true,
            'debug': false,
            'newestOnTop': true,
            'progressBar': false,
            'positionClass': 'toast-bottom-center',
            'preventDuplicates': true,
            'showDuration': '300',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut'
        };

        toastr.{$messageType}('$message');
    </script>";

      // Clear the message after displaying it
      unset($_SESSION['message']);
      unset($_SESSION['message_type']);
    }
    ?>
  </main>

  <script src="../public/assets/js/core/popper.min.js"></script>
  <script src="../public/assets/js/core/bootstrap.min.js"></script>
  <script src="../public/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../public/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../public/assets/js/plugins/chartjs.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script src="https://cdn.tiny.cloud/1/f9ggt3dqixvgwwjjoxp3xio6hgf0r72qnuvll71z6g0sckld/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>

  <script>
    let image = document.getElementById('image');
    let input = document.getElementById('profile');

    input.onchange = () => {
      image.src = URL.createObjectURL(input.files[0]);
    };
  </script>

  <script>
    $(function() {
      $('.selectOne').select2({
        placeholder: 'user',
        allowClear: true,
      });
      $('#tag-multiple').select2({
        placeholder: 'Tags',
        allowClear: true,
      });
    });
  </script>

  <script>
    const startDateInput = document.getElementById('startDate');
    const endDateInput = document.getElementById('endDate');
    const threeDaysFromNow = '<%= threeDaysFromNow %>';
    const today = '<%= today %>';

    function updateProfileImage(event) {
      event.preventDefault();
      const profileImgSrc = event.currentTarget.getAttribute('data-profile');
      const selectedProfileImg = document.getElementById('selectedProfileImg');
      const username = event.currentTarget.getAttribute('data-username');
      const dropdownButton = document.getElementById('userDropdown');
      const userId = event.currentTarget.getAttribute('data-userId');
      const userIdInput = document.getElementById('userId');

      selectedProfileImg.src = profileImgSrc;
      dropdownButton.innerText = `Assigned to ` + username;
      userIdInput.value = userId;

      // Set the min date to three days from today if a user is selected
      startDateInput.min = threeDaysFromNow;
      endDateInput.min = threeDaysFromNow;
    }

    // Reset min dates to today if no user is selected
    document.getElementById('userDropdown').addEventListener('click', function() {
      if (!document.getElementById('userId').value) {
        startDateInput.min = today;
        endDateInput.min = today;
      }
    });

    function updateProfileImageTable(event, dropdownItem) {
      event.preventDefault();

      const taskCell = dropdownItem.closest('td');

      const imgElement = taskCell.querySelector('.profilee');
      const usernameElement = taskCell.querySelector('#usernamee');

      const profileImgSrc = dropdownItem.getAttribute('data-profilee');
      imgElement.src = profileImgSrc;

      const username = dropdownItem.getAttribute('data-usernamee');
      usernameElement.innerText = username === 'unassigned' ? 'unassigned' : username;

      const userId = dropdownItem.getAttribute('data-userIdd');
      const userIdInput = taskCell.querySelector('#user_id1');
      userIdInput.value = userId;

      const submitBtn = taskCell.querySelector('button[type="submit"]');
      submitBtn.style.display = userId ? 'flex' : 'none';
      submitBtn.style.alignItems = 'center';
      submitBtn.style.justifyContent = 'center';
    }
  </script>

  <script>
    const fileInput = document.getElementById('file');
    const fileSelectedText = document.getElementById('file-selected');

    fileInput.addEventListener('change', function() {
      if (fileInput.files.length > 0) {
        fileSelectedText.textContent = fileInput.files[0].name;
      } else {
        fileSelectedText.textContent = 'No file selected';
      }
    });
  </script>
</body>

</html>

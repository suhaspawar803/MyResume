<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Department Managment System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="../../assets/images/faces/face15.png" alt="">
                <span class="count bg-danger"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">User</h5>
                <span>Unknown</span>
              </div>
            </div>
            
          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Dashboard</span>
        </li>
        <li class="nav-item menu-items active">
          <a class="nav-link" href="#">
            <span class="menu-icon">
              <i class="mdi mdi-account-plus"></i>
            </span>
            <span class="menu-title">Register</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="https://www.pravarapvpcollege.org.in/">
            <span class="menu-icon">
              <i class="mdi mdi-earth"></i>
            </span>
            <span class="menu-title">Official Website</span>
          </a>
        </li>
        
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row"><br>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <h3 id="h3head">Department Managment System</h3><br>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <span class="menu-icon">
                    <i class="mdi mdi-login-variant" alt=""></i>
                  </span>
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">Login</p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Profile</h6>
                <div class="dropdown-divider"></div>
                <a href="../../index.html" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-login-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Login</p>
                  </div>
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">

        <!-- content-wrapper ends -->
        <div class="container-scroller">
          <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
              <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto">
                  <div class="card-body px-5 py-5">
                    <h3 class="card-title text-left mb-3">Register</h3>
                    <form id="signupForm" method="post">
                      <div class="form-group">
                        <label>Username</label>
                        <input id="username" type="email" name="username" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <label>Library Number</label>
                        <input type="text" name="library" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input id="password" type="password" name="pass1" class="form-control p_input" required>
                      </div>
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input id="confirm_password" type="password" name="pass2" class="form-control p_input" required>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                      </div>
                      <p class="sign-up text-center">Already have an Account?<a href="../../index.html"> Sign Up</a></p>
                    </form>
                  </div>

                  <?php
                  if ($_POST) {
                    include '../../data.php';
                    $name = $_POST['username'];
                    $pass = $_POST['pass1'];
                    $role = 'Student';
                    $library = $_POST['library'];

                    if ($db) {
                      $sql = "INSERT INTO users VALUES(DEFAULT,'$name','$pass','$role','$library');";
                      $role = pg_query($db, $sql);
                      if (!$role) {
                        echo "Error: ";
                      } else {
                        echo "Registration successful...";
                      }
                    } else {
                      echo "Error: ";
                    }

                    pg_close($db);
                  }
                  ?>


                </div>
              </div>
              <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
          </div>
          <!-- page-body-wrapper ends -->
        </div>
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script>
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm_password');

    function validatePassword() {
      if (passwordInput.value != confirmPasswordInput.value) {
        confirmPasswordInput.setCustomValidity("Passwords don't match");
      }
      else {
        confirmPasswordInput.setCustomValidity('');
      }
    }

    passwordInput.addEventListener('change', validatePassword);
    confirmPasswordInput.addEventListener('keyup', validatePassword);

  </script>
  <!-- plugins:js -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../../assets/vendors/js/form-validation.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../assets/vendors/select2/select2.min.js"></script>
  <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/misc.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="../../assets/js/file-upload.js"></script>
  <script src="../../assets/js/typeahead.js"></script>
  <script src="../../assets/js/select2.js"></script>
  <!-- End custom js for this page -->
</body>

</html>
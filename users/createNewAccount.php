<?php require 'helpers/user_init.php' ?>
<?php require 'helpers/_create_user.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html" />
    <meta name="viewport" content="user-scalable=yes" />

    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#387BFE" />
    <!-- IOS Apple Chrome, Opera and FIreFox -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#387BFE" />
    <!-- windows phone -->
    <meta name="msapplication-navbutton-color" content="#387BFE" />
    <!-- Meta Info for Open Graph => Facebook> -->
    <!-- Meta Info for Twitter Card View -->
    <!-- Meta Info for Schema.org => Google.com -->
    <title>Create New Account | JIGAWA STATE SCHOLARSHIP BOARD DUTSE JIGAWA STATE</title>
    <!-- External css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/hover-min.css">
    <!-- main css for all pages -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- css for this page -->
    <link rel="stylesheet" href="../assets/css/index.css">
    <link
      rel="stylesheet"
      href="../assets/icons/md/css/materialdesignicons.min.css"
    />
  </head>
  <body class="bg-warning">
    <div class="preloader">
      <img src="../assets/css/loader.gif" alt="Loading" />
    </div>
    <nav
      class="navbar j navbar-expand-md bg-secondary py-2 navbar-dark shadow"
    >
      <a class=" ml-0 navbar-brand" href="../index.html">
        <img src="../assets/images/scholarship_logo.png" alt="" width="100">
       
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#toggleNavbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="toggleNavbar">
    <ul class="navbar-nav d-flex justify-content-around mr-0">
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-left" href="../index.php">Home</a>
      </li>
      <li class="nav-item">
            <a class="nav-link hvr-underline-from-center " href="../admin/login.php">
          Administration
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="login.php">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link hvr-underline-from-center " href="createNewAccount.php">
          Create Account
        </a>
      </li>
        <li class="nav-item">
        <a class="nav-link hvr-underline-from-center" href="../contactUs.php">Contact Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link hvr-underline-from-right " href="../aboutUs.php">
          About
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-success text-white revealApply" href="createNewAccount.php">
          Apply Now
        </a>
      </li>
      </ul>      
      </div>
    </nav> 
     <!-- /Header  -->
     <!-- Main-->
     <div class="container-fluid bg-warning py-5">
         <div class="container ">
        <div class="text-secondary text-center">
          <h2 class="text-uppercase shadow rounded bg-secondary text-warning py-5">beneficiary registeration form</h2>
          <span class="text-danger text-center">
                <?php if (isset($messages['msgErr'])) {
                  echo $messages['msgErr'];
                } ?>
              </span>
        </div>
       </div>
       <div class="container form-body shadow py-5">
         
          <form class="row g-3" accept="" method="POST">
  <div class="col-md-6">
    <label for="inputFirstName" class="form-label">FirstName:</label>
    <input type="text" name="firstname" class="form-control" id="inputFirstName" value="<?php if (isset($_POST['firstname'])) {
      echo $_POST['firstname'];
    } ?>" required>
  </div>
  <div class="col-md-6">
    <label for="inputSurName" class="form-label">SurName:</label>
    <input type="text" name="lastname" class="form-control" id="inputSurName" value="<?php if (isset($_POST['lastname'])) {
      echo $_POST['lastname'];
    } ?>"  required>
  </div>
  <div class="col-md-6">
    <label for="inputFirstName" class="form-label">Email:</label>
    <input type="email" name="email" class="form-control" id="inputFirstName" value="<?php if (isset($_POST['email'])) {
      echo $_POST['email'];
    } ?>"  required>
  </div>
  <div class="col-md-6">
    <label for="inputSurName" class="form-label">Phone Number:</label>
    <input type="text" name="phone" class="form-control" id="inputSurName" value="<?php if (isset($_POST['phone'])) {
      echo $_POST['phone'];
    } ?>" >
  </div>
  <div class="col-md-6">
    <label for="inputSurName" class="form-label">Password:</label>
    <input type="password" name="password" class="form-control" id="inputSurName">
  </div>
  <div class="col-md-6">
<button type="submit" name="add_user" class="btn mt-2 btn-success submitBtn">SUBMIT</button>
  </div>
  <div class="col-md-6 text-center">
  <p class="lead mt-2">Already have an Account? <a href="../users/login.html">Sign In</a> </p>
  </div>
</form>
       </div>
     </div>
    
     <!-- /Main-->
   

    <!-- Footer -->
    <footer class="footer revealFooter">
    <div class="container-fluid bg-secondary py-5">
      <div class="container text-center">
        <p class="text-white lead">All right reserved copyright Jigawa State Scholarship Board <br> Designed by NASIR</p>
      </div>
    </div>
    </footer>
    <!-- /Footer -->

    <!-- External Scripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/count-up.min.js"></script>
    <script src="../assets/js/scrollreveal.min.js"></script>
    <!-- main javascript file for al pages -->
    <script src="../assets/js/main.js"></script>
    <script>


    // scroll reveal
    ScrollReveal().reveal('.revealApply', 
    {origin : 'right',
    delay    : 300,
    duration: 500,
    distance : '120px',
    easing   : 'ease-in-out'
    });

    // scroll reveal
    ScrollReveal().reveal('.revealFooter', 
    {origin : 'bottom',
    delay    : 500,
    duration: 600,
    distance : '100px',
    easing   : 'ease-in-out'
    });
    </script>
    <script src="../assets/js/lga.min.js"></script>
  </body>
</html>

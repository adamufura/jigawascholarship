<?php require 'helpers/user_init.php'; ?>

<?php if (!isUserLoggedIn()) {
    header("Location: login.php");
} ?>

<?php

    if (!isset($_SESSION)) {
            session_start();
    }

    $email = $_SESSION['s_user_id'];

function getBeneficiaryByEmail($email)
{
  global $connection;

    $userdata_q = "SELECT * FROM `beneficiaries` WHERE `email` = ?";

    $user_data_stmt = mysqli_prepare($connection, $userdata_q);

    mysqli_stmt_bind_param($user_data_stmt, 's', $email);

    mysqli_stmt_execute($user_data_stmt);

    $result = mysqli_fetch_assoc(mysqli_stmt_get_result($user_data_stmt));

    mysqli_stmt_close($user_data_stmt);

    return $result;
}


  $status = getBeneficiaryByEmail($email)['status'];

if ($status != "Awarded") {
  header("location: checkStatus.php");
}


?>

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
    <title>Award | JIGAWA STATE SCHOLARSHIP BOARD DUTSE JIGAWA STATE</title>
    <!-- External css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/hover-min.css">
    <!-- main css forrd all pages -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- css for this page -->
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/icons/css/all.min.css">
    <link rel="stylesheet" href="../assets/icons/css/fontawesome.min.css">
    <link
      rel="stylesheet"
      href="../assets/icons/md/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="../assets/css/awardDesign.css">
  </head>
  <body class="bg-warning">
    <div class="preloader">
      <img src="../assets/images/loader.gif" alt="Loading" />
    </div>
   
     <!-- /Header  -->
     <!-- Main-->
     <div class="container-fluid py-3">
       <div class="container">
        <div class="outer-border bg-light">
     <div class="inner-dotted-border"> 
       <div class="text-muted text-right">REF ID: <?php echo getBeneficiaryByEmail($email)['ref_id'] ?></div>
         <h4 class="text-success certify">
             JIGAWA STATE SCHOLARSHIP BOARD
            </h4> <br><br> 
            <span class="">
                <i>Evidence For the AWARD OF Jigawa State Scholarship</i>
                <b class="d-block">TO</b>
            </span> <br><br> 
            <span class="name">
                <b><?php echo getUserByEmail($email)['firstname'] . " " . getUserByEmail($email)['lastname'] ?></b>
            </span><br /><br /> 
            <span class="certify">
              <b class="d-block">Of</b>
                <i><?php echo getUserInstitutionByEmail($email)['school'] ?></i>
            </span> <br />
            <hr>
            <div class="clearfix">
  <span class="float-left">Payment: &#8358;<?php echo getBeneficiaryByEmail($email)['payment'] ?> </span>
  <span class="float-right">Remark: <?php echo getBeneficiaryByEmail($email)['remark'] ?> </span>
</div>
             <span >
                 <span class="certify"><i>Starting</i></span><br> <span class="">
                   <?php echo "<span class='text-success'>" . date("d-M-Y", strtotime(getBeneficiaryByEmail($email)['start_date'])) . "</span>" . " To " . "<span class='text-danger'>" . date("d-M-Y", strtotime(getBeneficiaryByEmail($email)['expiry_date'])) . "</span>"  ?> </span>
<div class="d-block mt-5">
                       <a href="index.php" class="btn btn-danger" >Close</a>
       <button class="btn btn-success" onclick="window.print()">Print</button>
</div>
    </div>

</div>

         </div>
       </div>
       
     </div>
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
  </body>
</html>







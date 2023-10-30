<?php require 'helpers/admin_init.php'; ?>

<?php
$pageDetails = [
  'title' => "ADMIN Dashboard | JIGAWA SCHOLARSHIP"
];

Includes::custom_include('includes/header.php', $pageDetails, true);

function getCount($table)
{

    global $connection;

    $user_data_q = "SELECT * FROM `$table`";

    $user_data_stmt = mysqli_prepare($connection, $user_data_q);

    mysqli_stmt_execute($user_data_stmt);

    $result = mysqli_stmt_get_result($user_data_stmt);

    return mysqli_num_rows($result);
}
function getCustomCount($table, $status)
{

    global $connection;

    $user_data_q = "SELECT * FROM `$table` WHERE `status` = '$status'";

    $user_data_stmt = mysqli_prepare($connection, $user_data_q);

    mysqli_stmt_execute($user_data_stmt);

    $result = mysqli_stmt_get_result($user_data_stmt);

    return mysqli_num_rows($result);
}

?>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php Includes::custom_include('includes/sidebar.php', [], true);    ?>
        <!-- /Sidebar -->
    
        
        <!-- Page Content Holder -->
        <div id="content">
 <!-- Nav -->
        <?php Includes::custom_include('includes/nav.php', [], true);    ?>
           <!-- /Nav -->

            
        <section class="section">
                  <div class="row">
              <div class="col-lg-4 mt-2 col-md-6 col-sm-12">
                  <div class="card mx-auto card-dimension bg-secondary py-3  shadow" >
                   <img src="../assets/images/search2.png" class="card-img-top" alt="tasks" width="80px" height="200px">
                   <div class="card-body">
                  <a href="students.php" class="btn card-btn btn-primary">
                    <span class="badge badge-warning"><?php echo getCount('users') ?></span> Student
                  </a>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 mt-2 col-md-6 col-sm-12">
                  <div class="card card-dimension mx-auto bg-secondary py-3  shadow" >
                   <img src="../assets/images/documents_icon.png" class="card-img-top" alt="tasks" width="200px" height="200px">
                   <div class="card-body">
                  <a href="applicants.php" class="btn card-btn btn-primary"> <span class="badge badge-warning"><?php echo getCustomCount('beneficiaries', 'In Review') ?></span> Applicants</a>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 mt-2 col-md-6 col-sm-12">
                  <div class="card card-dimension mx-auto bg-secondary py-3  shadow" >
                   <img src="../assets/images/award_icon.png" class="card-img-top" alt="tasks" width="200px" height="200px">
                   <div class="card-body">
                  <a href="beneficiaries.php" class="btn card-btn btn-primary">
                     <span class="badge badge-warning"> <?php echo getCustomCount('beneficiaries', 'Awarded') ?></span>
                     Beneficiaries</a>
                    </div>
                  </div>
              </div>
          </div>          
        </section>
    </div>

    <!-- footer -->
    <?php Includes::custom_include('includes/footer.php', [], true);    ?>
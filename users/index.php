<?php require 'helpers/user_init.php'; ?>

<?php
$pageDetails = [
  'title' => "User Dashboard | JIGAWA SCHOLARSHIP"
];

Includes::custom_include('includes/header.php', $pageDetails, true);

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
              <div class="col-lg-3 mt-2 col-md-3 col-sm-12">
                  <div class="card mx-auto card-dimension bg-secondary py-3  shadow" >
                   <img src="../assets/images/search2.png" class="card-img-top" alt="tasks" width="80px" height="200px">
                   <div class="card-body"> 
    
                  <a href="checkStatus.php" class="btn card-btn btn-primary">Check Status</a>
                    </div>
                  </div>
              </div>
              <div class="col-lg-3 mt-2 col-md-3 col-sm-12">
                  <div class="card mx-auto card-dimension bg-secondary py-3  shadow" >
                   <img src="../assets/images/Personal information.png" class="card-img-top" alt="tasks" width="80px" height="200px">
                   <div class="card-body">
    
                  <a href="basicInfo.php" class="btn  card-btn btn-primary">Edit Basic Info.</a>
                    </div>
                  </div>
              </div>
              <div class="col-lg-3 mt-2 col-md-3 col-sm-12">
                  <div class="card mx-auto card-dimension bg-secondary py-3  shadow" >
                   <img src="../assets/images/educational.jpg" class="card-img-top" alt="tasks" width="200px" height="200px">
                   <div class="card-body">
    
                   <a href="educationalHistory.php" class="btn px-3  card-btn btn-primary">Education</a>
                    </div>
                  </div>
              </div>
              <div class="col-lg-3 mt-2 col-md-3 col-sm-12">
                  <div class="card mx-auto card-dimension bg-secondary py-3  shadow" >
                   <img src="../assets/images/insitution.png" class="card-img-top" alt="tasks" width="200px" height="200px">
                   <div class="card-body">
    
                  <a href="institution.php" class="btn  card-btn btn-primary">Institution</a>
                    </div>
                  </div>
              </div>
              <div class="col-lg-3 mt-2 col-md-3 col-sm-12">
                  <div class="card mx-auto card-dimension bg-secondary py-3  shadow" >
                   <img src="../assets/images/documents_icon.png" class="card-img-top" alt="tasks" width="200px" height="200px">
                   <div class="card-body">
    
                  <a href="document.php" class="btn  card-btn btn-primary">Upload Documents</a>
                    </div>
                  </div>
              </div>
          </div>          
        </section>
        
    </div>

  <!-- footer -->
    <?php Includes::custom_include('includes/footer.php', [], true);    ?>
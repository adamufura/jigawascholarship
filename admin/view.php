<?php require 'helpers/admin_init.php'; ?>  
<?php require 'helpers/_view.php'; ?>  

<?php
$pageDetails = [
  'title' => "Applicant | JIGAWA SCHOLARSHIP"
];

Includes::custom_include('includes/header.php', $pageDetails, true);

if (isset($_GET['email'])) {
      $email = $_GET['email'];
      $status = getBeneficiaryByEmail($email)['status'];
}else{
      header("location: index.php");
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
                    <form class="card" action="" method="POST">
                      <div class="card-body shadow-sm">
                        <h4 class="text-center">Student Profile</h4>
                      <h5 class="text-center">    <?php 
                          if (isset($Msg)) {
                            echo $Msg;
                          }
                          ?></h5>
                      </div>
                      <div class="card-body row">
                        <div class="col-md-10">
                      
                        <!-- inputs -->
<div class="row">
    <div class="form-group col-md-6">
    <label for="email">JSSB:</label>
    <input type="text" class="form-control" value="<?php echo getBeneficiaryByEmail($email)['ref_id'] ?>" readonly>
  </div>
  <div class="form-group col-md-6">
    <label for="pwd">Email:</label>
    <input type="email" class="form-control" value="<?php echo getUserByEmail($email)['email']; ?>">
  </div>
</div>
<div class="row">
    <div class="form-group col-md-12">
    <label for="email">Full Name:</label>
    <input type="text" class="form-control" value="<?php echo getUserByEmail($email)['firstname'] . " " . getUserByEmail($email)['lastname'] ; ?>">
  </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
    <label for="email">School:</label>
    <input type="text" class="form-control" value="<?php echo getUserInstitutionByEmail($email)['school'] ?>" >
  </div>
  <div class="form-group col-md-6">
    <label for="pwd">Department:</label>
    <input type="text" class="form-control" value="<?php echo getUserInstitutionByEmail($email)['department'] ?>" >
  </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
    <label for="email">Phone Number:</label>
    <input type="text" class="form-control" value="<?php echo getUserByEmail($email)['phone']; ?>" >
  </div>
  <div class="form-group col-md-6">
    <label for="pwd">Marital Status:</label>
    <input type="text" class="form-control" value="<?php echo getUserByEmail($email)['marital_status']; ?>">
  </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
    <label for="email">State:</label>
    <input type="text" class="form-control"value="<?php echo getUserByEmail($email)['state']; ?>" >
  </div>
  <div class="form-group col-md-4">
    <label for="pwd">LGA:</label>
    <input type="text" class="form-control" value="<?php echo getUserByEmail($email)['lga']; ?>">
  </div>
  <div class="form-group col-md-4">
    <label for="pwd">Ward:</label>
    <input type="text" class="form-control" value="<?php echo getUserByEmail($email)['ward']; ?>">
  </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
    <label for="email">Payment &#8358;:</label>
    <input type="text" name="payment" class="form-control" value="<?php echo getBeneficiaryByEmail($email)['payment'] ?>">
  </div>
    <div class="form-group col-md-6">
    <label for="email">Remark:</label>
    <input type="text" name="remark" class="form-control" value="<?php echo getBeneficiaryByEmail($email)['remark'] ?>" >
  </div>
</div>
<div class="row text-center">
    <div class="form-group col-md-12">
    <?php if(empty($status)): ?>
          <a href="index.php" class="btn btn-warning w-25">Close</a>
      <?php else:?>
      <a href="index.php" class="btn btn-warning w-25">Close</a>
    <button type="submit" name="approve"  class="btn btn-success w-25">Approve</button>
    <button type="submit" name="reject"  class="btn btn-danger w-25">Reject</button>
    
      <?php endif; ?>
  </div>
</div>
                        <!-- /inputs -->


                    </div>
                    <div class="col-md-2">
                      <img src="../users/<?php echo getUserByEmail($email)['avatar']; ?>" class="img-thumbnail" width="200" alt="">
                      <div class="my-3">
                        <h4>Documents</h4>
                        <div class="card-body text-center shadow-sm">
                          <h5 class="text-center">Indigene</h5>
                          <a target="_blank" href="<?php echo getUserDocumentsByEmail($email)['indigene']; ?>" class="btn-link">Open</a>
                        </div>
                        <div class="card-body text-center shadow-sm">
                          <h5 class="text-center">SSCE</h5>
                          <a target="_blank" href="<?php echo getUserDocumentsByEmail($email)['ssce']; ?>" class="btn-link">Open</a>
                        </div>
                        <div class="card-body text-center shadow-sm">
                          <h5 class="text-center">Status</h5>
                         <span class="text-info"> 
                          <?php if (!empty($status)) {
                            echo $status;
                          }else {
                            echo "Not Applied";
                          }  ?>
                        </span>
                        </div>
                      </div>
                    </div>
                      </div>
                  </form>      
        </section>
    </div>

    <!-- footer -->
    <?php Includes::custom_include('includes/footer.php', [], true);    ?>
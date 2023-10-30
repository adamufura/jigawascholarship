<?php require 'helpers/user_init.php'; ?>
<?php require 'helpers/_check_status.php'; ?>
<?php
$pageDetails = [
  'title' => "User Dashboard | JIGAWA SCHOLARSHIP"
];

Includes::custom_include('includes/header.php', $pageDetails, true);


?>

    <?php $status = getUserAwardByEmail($email)['status'] ?>

<?php $currentUser = getUserByEmail($_SESSION['s_user_id']); ?>

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
      <div class="container">
      <div class="col-12 bg-secondary my-2 rounded shadow text-center text-white">
      <label for="" class="form-label py-5">Beneficiary Application Status</label>
   </div>

   <?php if(!user_award_exist($email)) :?>

    <form class="row shadow bg-light text-center rounded py-5" action="" method="POST">
  <div class="col-6 mt-3">
   <p class="text-warning">You are not yet a Beneficiary</p>
   <?php
   
      if ((count(isUserProfileComplete($email)) < 1) && user_education_exist($email) &&user_institution_exist($email) && user_documents_exist($email)) {
     echo '<p class="text-success">Apply Here</p>';
   }else{
          echo '<p class="text-warning">You must update the following before you can apply</p>';
   }
   
   ?>
   <?php 
   
   
for($x = 0; $x < count(isUserProfileComplete($email)); $x++) {
  echo "<li class='text-danger'>" . isUserProfileComplete($email)[$x] . "</li>";
}
    ?>
    <?php 
    if(count(isUserProfileComplete($email)) > 0){
      echo "<p> Complete your profile " . "<a class='text-success' href='basicInfo.php' > Here" . "</a> </p>";
    }
    ?> 

    <?php
      if (!user_education_exist($email)) {
        echo "<li class='text-danger'>Please add your EDUCATION HISTORY</li>";
        echo "<p> Complete Education History " . "<a class='text-success' href='educationalHistory.php' > Here" . "</a> </p>";
      }
    ?>
    <?php
      if (!user_institution_exist($email)) {
        echo "<li class='text-danger'>Please add your INSTITUTION INFORMATION</li>";
        echo "<p> Complete Institution Information " . "<a class='text-success' href='institution.php' > Here" . "</a> </p>";
      }
    ?>
    <?php
      if (!user_documents_exist($email)) {
        echo "<li class='text-danger'>Please add your DOCUMENTS</li>";
        echo "<p> Complete Your documents" . "<a class='text-success' href='document.php' > Here" . "</a> </p>";
      }
    ?>
   </div>

   <?php
   
   if ((count(isUserProfileComplete($email)) < 1) && user_education_exist($email) &&user_institution_exist($email) && user_documents_exist($email)) {
     echo '  <div class="col-6 ml-0 mt-5">
    <button type="submit" name="apply" href="#" class="btn btn-outline-success w-100">Apply</button>
  </div>';
   }
   
   ?>
 

  </form>

   <?php else: ?>

        <form class="row shadow bg-light text-center rounded py-5">
  <div class="col-6 mt-3">
   <h4>Hi, <?php echo $currentUser['firstname'] . " " . $currentUser['lastname']; ?></h4>
   <p>Jigawa State Government has</p>
   <?php 
   if($status == 'Awarded'){
     echo "<a href='viewAward.php' >View Award </a>";
   }
   ?>
   </div>
  <div class="col-6 ml-0 mt-5">
    <p>Your Application with Reference ID: <kbd><?php echo getUserAwardByEmail($email)['ref_id'] ?></kbd></p>
    <p>Your Application Status: 
       <span class="btn

                <?php if($status == 'Awarded'){
                  echo "btn-success";
                }else if ($status == 'In Review'){
                  echo "btn-warning";
                }else if($status =='Rejected'){
                  echo "btn-danger";
                } ?>

                "><?php echo $status; ?></span>
    </p>

  </div>
  </form>

    <?php  endif; ?>
      </div> 
        </section>
        
    </div>
  <!-- footer -->
    <?php Includes::custom_include('includes/footer.php', [], true);    ?>
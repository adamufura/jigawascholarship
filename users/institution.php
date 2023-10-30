<?php require 'helpers/user_init.php'; ?>
<?php require 'helpers/_institution.php'; ?>

<?php
$pageDetails = [
  'title' => "Institution | JIGAWA SCHOLARSHIP"
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
         <div class="container">
               <form class="row g-3"  action="" method="POST">
                   <div class="col-md-12 bg-secondary my-2 rounded shadow text-center text-white">
    <label for="" class="form-label py-3">Edit Your Institution Information</label>
  </div>
   <div class="col-md-6">
    <label for="inputSchool" class="form-label">School:</label>
    <input type="text" class="form-control" id="inputSchool"  name="school"
                            value="<?php echo getUserInstitutionByEmail($email)['school']; ?>">
  </div>
  <div class="col-md-6">
    <label for="inputFaculty" class="form-label">Faculty/Dept:</label>
    <input type="text" class="form-control" id="inputFaculty" name="department"
                            value="<?php echo getUserInstitutionByEmail($email)['department']; ?>">
  </div>
  <div class="col-md-6">
 <?php if(!user_institution_exist($email)): ?>
          <button class="btn mt-4 btn-success py-2 submitBtn" type="submit" name="add_institution">SUBMIT</button>
          <?php else: ?>
            <p>Institution Already added</p>
            <?php endif; ?>  </div>
</form>
         </div>        
        </section>
        
    </div>

  <!-- footer -->
    <?php Includes::custom_include('includes/footer.php', [], true);    ?>
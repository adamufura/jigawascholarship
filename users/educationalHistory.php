<?php require 'helpers/user_init.php'; ?>
<?php require 'helpers/_education.php'; ?>

<?php
$pageDetails = [
  'title' => "Education | JIGAWA SCHOLARSHIP"
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
    <label for="" class="form-label py-3">Add Your Educational History Record </label>
            <label for="" class="d-block text-warning">Note: It can only be added once</label>
  </div>
  <div class="col-md-6">
    <label for="inputPrimary" class="form-label">Primary:</label>
    <input type="text" class="form-control" id="inputPhone"  name="primary_education"
                            value="<?php echo getUserEducationByEmail($email)['primary_education']; ?>">
  </div>
  <div class="col-md-6">
    <label for="inputDatePrimary" class="form-label">Date:</label>
    <input type="date" class="form-control" id="inputDatePrimary"  name="primary_date"
                            value="<?php echo getUserEducationByEmail($email)['primary_date']; ?>">
  </div>
  <div class="col-md-6">
    <label for="inputSecondary" class="form-label">Secondary:</label>
    <input type="text" class="form-control" id="inputSecondary"  name="secondary_education"
                            value="<?php echo getUserEducationByEmail($email)['secondary_education']; ?>">
  </div>
  <div class="col-md-6">
    <label for="inputDateSecondary" class="form-label">Date:</label>
    <input type="date" class="form-control" id="inputDateSecondary"  name="secondary_date"
                            value="<?php echo getUserEducationByEmail($email)['secondary_date']; ?>">
  </div>
  <div class="col-md-6">
          <?php if(!user_education_exist($email)): ?>
          <button class="btn mt-4 btn-success py-2 submitBtn" type="submit" name="add_education">SUBMIT</button>
          <?php else: ?>
            <p>Education Already added</p>
            <?php endif; ?>
  </div>
               </form>
         </div>        
        </section>
        
    </div>

  <!-- footer -->
    <?php Includes::custom_include('includes/footer.php', [], true);    ?>
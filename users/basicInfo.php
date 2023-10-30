<?php require 'helpers/user_init.php'; ?>
<?php require 'helpers/_edit_profile.php'; ?>

<?php
$pageDetails = [
  'title' => "Basic Info | JIGAWA SCHOLARSHIP"
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
            <div class="text-center">
                            <?php
                                if (isset($Msg)) {
                                    echo $Msg;
                                }
                            ?>
                        </div>
         <div class="container">
                                <div class="col-md-12 bg-secondary my-2 rounded shadow text-center text-white">
    <label for="" class="form-label py-3">Edit Your Basic Information</label>

  </div>
               <form class="row g-3" action="" method="POST" enctype="multipart/form-data" autocomplete="off">

  <div class="col-md-6">
    <label for="inputFirstName" class="form-label">FirstName:</label>
    <input type="text" class="form-control" id="inputFirstName"  name="firstname"
                            value="<?php echo getUserByEmail($email)['firstname']; ?>">
  </div>
  <div class="col-md-6">
    <label for="inputSurName" class="form-label">SurName:</label>
    <input type="text" class="form-control" id="inputSurName" name="lastname"
                            value="<?php echo getUserByEmail($email)['lastname']; ?>">
  </div>
  <div class="col-md-6">
     <label for="inputSex" class="form-label">Sex</label>
        <select class="form-control select" name="sex">
        <option value="select">Select</option>
        <?php 

                                                    $cur_gender =   getUserByEmail($email)['sex'];
                                                    
                                                    $genders = ['Male', 'Female'];
                                                    foreach ($genders as  $gender) {
                                                        if ($cur_gender == $gender) {
                                                            echo "<option value='{$gender}' selected>
                                                            {$gender}
                                                            </option>";
                                                        }else {
                                                            echo "<option value='{$gender}'>
                                                            {$gender}
                                                            </option>";
                                                        }
                                                    }

                                                    ?>
        </select>
  </div>
  <div class="col-md-6">
    <label for="inputMarital" class="form-label">Marital Status:</label>
    <select class="form-control select" name="status">
        <option value="select">Select</option>
        <?php 

                                                    $cur_status =   getUserByEmail($email)['marital_status'];
                                                    
                                                    $status = ['Single', 'Married'];
                                                    foreach ($status as  $status) {
                                                        if ($cur_status == $status) {
                                                            echo "<option value='{$status}' selected>
                                                            {$status}
                                                            </option>";
                                                        }else {
                                                            echo "<option value='{$status}'>
                                                            {$status}
                                                            </option>";
                                                        }
                                                    }

                                                    ?>
        </select>
  </div>
  <div class="col-md-6">
   <label for="inputState" class="form-label">State:</label>
    <input type="text" class="form-control" id="inputPhone" name="state"
                            value="<?php echo getUserByEmail($email)['state']; ?>">
  </div>
  <div class="col-md-6">
   <label class="control-label">LGA of Origin</label>
    <input type="text" class="form-control" id="inputPhone" name="lga" value="<?php echo getUserByEmail($email)['lga']; ?>">
  </div>
  <div class="col-md-6">
    <label for="inputPhone" class="form-label">Phone Number:</label>
    <input type="text" class="form-control" id="inputPhone" name="phone"
                            value="<?php echo getUserByEmail($email)['phone']; ?>">
  </div>
  <div class="col-md-6">
    <label for="inputWard" class="form-label">Ward:</label>
    <input type="text" class="form-control" id="inputWard" name="ward" value="<?php echo getUserByEmail($email)['ward']; ?>">
  </div>
    <div class="col-md-6">
    <label for="" class="form-label">Upload Profile Picture</label>
  <input type="file" class="form-control" id="inputGroupFile03"
                          name="avatar">
  </div>
  <div class="col-md-6">
          <button class="btn mt-4 btn-success py-2 submitBtn" type="submit" name="edit_profile" >SUBMIT</button>
  </div>
               </form>
         </div>        
        </section>
        
    </div>


  <!-- footer -->
    <?php Includes::custom_include('includes/footer.php', [], true);    ?>
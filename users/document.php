<?php require 'helpers/user_init.php'; ?>
<?php require 'helpers/_document.php'; ?>

<?php
$pageDetails = [
  'title' => "Documents | JIGAWA SCHOLARSHIP"
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
               <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                   <div class="col-md-12 bg-secondary my-2 rounded shadow text-center text-white">
    <label for="" class="form-label py-3">Upload Your Documents</label>
    
  </div>
  <div class="col-md-6">
    <label for="" class="form-label">Indigene</label>
  <input type="file" class="form-control" value="INDIGINE" id="inputGroupFile01" name="indigene"
                            >
  </div>
  <div class="col-md-6">
    <label for="" class="form-label">SSCE</label>
  <input type="file" class="form-control" placeholder="SSCE" id="inputGroupFile02" name="ssce" >
  </div>
  <div class="col-md-6">
       <?php if(!user_documents_exist($email)): ?>
          <button class="btn mt-4 btn-success py-2 submitBtn" type="submit" name="add_documents">SUBMIT</button>
          <?php else: ?>
            <p>Documents Already added</p>
            <?php endif; ?> 
  </div>
</form>
         </div>        
        </section>
        
    </div>

     <!-- footer -->
    <?php Includes::custom_include('includes/footer.php', [], true);    ?>
<?php require 'helpers/admin_init.php'; ?>
<?php require 'helpers/_beneficiaries.php'; ?>

<?php
$pageDetails = [
  'title' => "ADMIN Dashboard | JIGAWA SCHOLARSHIP"
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
        <!-- Main body-->    
        <section class="section">       
             <div class="container">
        <div class="text-secondary text-center">
          <h2 class="text-uppercase text-warning py-3 shadow rounded bg-secondary">
              Awarded Students
          </h2>
        </div>
          </div> 
            <div class="container">
        <div class="card bg-light p-5 rounded shadow">
            <table id="myTb" class="table table-striped table-hover display bg-light" >
            <thead>
                    <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">JSSB NO</th>
                    <th scope="col">Email</th>
                    <th scope="col">NAME</th>
                    <th scope="col">SCHOOL</th>
                    <th scope="col">DEPARTMENT</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
             <?php $counter = 1; ?>
									<?php while ($user = mysqli_fetch_assoc($users)) : ?>
										<tr>
												<td class="cell">#<?php echo $counter++; ?></td>
												<td class="cell">
													<?php echo $user['ref_id']; ?>
												</td>
												<td class="cell">
													<?php echo $user['email']; ?>
												</td>
												<td class="cell">
													<?php echo getUserByEmail($user['email'])['firstname'] . " " . getUserByEmail($user['email'])['lastname'] ?>
												</td>
                                                <td class="cell"><?php echo getInstitutionById($user['email'])['school'] ?></td>
												<td class="cell"><?php echo getInstitutionById($user['email'])['department'] ?></td>
                                                <td class="cell">
													<a class="btn btn-sm my-1 btn-info" href="view.php?email=<?php echo $user['email'];?>">View Profile</a>

													<a class="btn btn-sm btn-danger" href="?terminate=<?php echo $user['email'];?>">Terminate &nbsp;</a>
												</td>
											</tr>
									<?php endwhile; ?>
        </table>  
       </div>         
    </div>     

        </section>
         <!-- end of Main body-->
    </div> 
       <!-- footer -->
    <?php Includes::custom_include('includes/footer.php', [], true);    ?>
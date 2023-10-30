 <?php $currentUser = getUserByEmail($_SESSION['s_user_id']); ?>
 <nav id="sidebar">
            <div class="sidebar-header">
               <a href="index.php"><img src="<?php echo $currentUser['avatar'] ?>" class="rounded shadow" alt="LOGO" width="200px" srcset=""></a>
            </div>

                <ul class="list-unstyled components sidebar-header">
                <h3 class="text-center shadow  py-3"><a href="#">Hi, <?php echo $currentUser['firstname']; ?></a></h3>
                <li class="active">
                  <a href="index.php" >DASHBOARD</a>
                </li>
                <li class="">           
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">EDIT PROFILE</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a class="text-uppercase" href="basicInfo.php">Basic Info.</a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li>
                            <a class="text-uppercase" href="educationalHistory.php">Educational History.</a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li>
                            <a class="text-uppercase" href="institution.php">Institution</a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li>
                            <a class="text-uppercase" href="document.php">Documents</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="viewAward.php">VIEW AWARD</a>
                </li>

            </ul>

            <ul class="list-unstyled CTAs sidebar-header">
                <li>
                    <a href="logout.php" class="logOut-btn">LogOut</a>
                </li>
            </ul>
        </nav>
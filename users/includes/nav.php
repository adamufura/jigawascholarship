  <?php $currentUser = getUserByEmail($_SESSION['s_user_id']); ?>
 <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary rounded">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn rounded">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto mt-2 rounded bg-warning shadow p-2 round">
                              <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                   
                    <div class="d-sm-none d-lg-inline-block  text-uppercase mr-5">Hi,<?php echo $currentUser['firstname']; ?></div></a>
                    <div class="dropdown-menu dropdown-menu-right p-5">
                        <a href="basicInfo.php" class="dropdown-item has-icon"><i class="far fa-user"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="logout.php" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
                        </ul>
                    </div>
                </div>
            </nav>